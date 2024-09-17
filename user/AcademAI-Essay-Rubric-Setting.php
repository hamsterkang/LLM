

<?php
    require_once('../include/extension_links.php');
    require_once("../tools/add-new-subject-criteria.php");

?>


<script>
document.querySelector("form").addEventListener("submit", function() {
    // Disable the submit button to prevent double submission
    this.querySelector("button[type='submit']").disabled = true;
});
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/essay_rubric_setting-1.css">   
    <title></title>
</head>
<body>

<?php
  require_once '../include/academAI-sidebar.php';
?>
     
        <div class="essay-criteria-setting-container"> 
        
       
<div class="subject-container">
<?php if (!empty($groupedCriteria)): ?>
    <?php 
    // Get the most recent subject and its criteria
    $subject_id = key($groupedCriteria); 
    $data = $groupedCriteria[$subject_id]; 
    ?>
    <div class="subject">
        <form method="POST" action="../tools/add-new-subject-criteria.php"> <!-- Update this to your actual save script -->
            <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>"> <!-- To identify the subject -->
            <input type="text" name="title" value="<?php echo htmlspecialchars($data['title']); ?>" class="subject-title-input" required> <!-- Editable subject title -->

            <div class="criteria-table-container">
                <table class="table table-hover table-bordered">
                    <thead class="criteria-heading">
                        <tr>
                            <th scope="col">Criteria</th>
                            <th scope="col">Advanced (100%)</th>
                            <th scope="col">Proficient (75%)</th>
                            <th scope="col">Needs Improvement (50%)</th>
                            <th scope="col">Warning (25%)</th>
                            <th scope="col">Weight <span>%</span></th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="predefined-criteria" id="criteria-table-body-<?php echo $subject_id; ?>">
                        <?php if (!empty($data['criteria'])): ?>
                            <?php foreach ($data['criteria'] as $row): ?>
                                <tr>
                                    <td>
                                        <input type="hidden" name="criteria_id[]" value="<?php echo htmlspecialchars($row['criteria_id']); ?>">
                                        <div class="input-scroll-container">
                                            <textarea name="criteria_name[]" required><?php echo htmlspecialchars($row['criteria_name']); ?></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-scroll-container">
                                            <textarea name="advanced_text[]" required><?php echo htmlspecialchars($row['advanced_text']); ?></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-scroll-container">
                                            <textarea name="proficient_text[]" required><?php echo htmlspecialchars($row['proficient_text']); ?></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-scroll-container">
                                            <textarea name="needs_improvement_text[]" required><?php echo htmlspecialchars($row['needs_improvement_text']); ?></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-scroll-container">
                                            <textarea name="warning_text[]" required><?php echo htmlspecialchars($row['warning_text']); ?></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-scroll-container">
                                            <input type="number" name="weight[]" value="<?php echo htmlspecialchars($row['weight']); ?>" step="0.01">
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" id="remove-criteria-btn" class="delete-criteria-btn" onclick="deleteCriteria(this)">Remove</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No criteria found for this subject.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                <!-- Add, Save, and Cancel Buttons -->
            </div>
            <div class="add-save-btn mb-4">
                <div class="row">
                    <div class="col-7 d-flex justify-content-start">
                        <button type="button" class="add-btn-criteria btn btn-sm" id="add-another-<?php echo $subject_id; ?>" name="add-another" onclick="addCriteria(<?php echo $subject_id; ?>)">
                            Add Criteria
                        </button>
                    </div>
                    <div class="col-5 d-flex justify-content-center">
                        <button type="submit" class="save-criteria-btn" name="Save">Save</button>
                        <button type="button" class="cancel-criteria-btn-2" onclick="deleteSubject(<?php echo $subject_id; ?>)">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php endif; ?>






        
        
  
    </div>

    <script>
function addCriteria(subjectId) {
    // Get the criteria table body for the specific subject
    const criteriaTable = document.getElementById(`criteria-table-body-${subjectId}`);
    const newRow = document.createElement('tr');
    
    newRow.innerHTML = `
        <td>
            <input type="hidden" name="criteria_id[]" value="">
            <div class="input-scroll-container">
                <textarea name="criteria_name[]" required></textarea>
            </div>
        </td>
        <td>
            <div class="input-scroll-container">
                <textarea name="advanced_text[]" required></textarea>
            </div>
        </td>
        <td>
            <div class="input-scroll-container">
                <textarea name="proficient_text[]" required></textarea>
            </div>
        </td>
        <td>
            <div class="input-scroll-container">
                <textarea name="needs_improvement_text[]" required></textarea>
            </div>
        </td>
        <td>
            <div class="input-scroll-container">
                <textarea name="warning_text[]" required></textarea>
            </div>
        </td>
        <td>
            <div class="input-scroll-container">
                <input type="number" name="weight[]" required>
            </div>
        </td>
        <td>
            <button type="button" class="delete-criteria-btn" onclick="deleteCriteria(this)">Remove</button>
        </td>
    `;

    
    criteriaTable.appendChild(newRow);
}

// Function to delete criteria row
function deleteCriteria(button) {
    const row = button.parentNode.parentNode; // Get the row of the button
    row.parentNode.removeChild(row); // Remove the row
}
</script>
<script>

function deleteSubject(subjectId) {
    if (confirm("Are you sure you want to delete this subject and all its criteria?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../tools/delete-subject.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Redirect to the specified URL
                        window.location.href = response.redirect;
                    } else {
                        alert("Error deleting subject: " + response.message);
                    }
                } else {
                    alert("Error deleting subject: " + xhr.statusText);
                }
            }
        };
        xhr.send("subject_id=" + encodeURIComponent(subjectId));
    }
}



</script>


</body>
</html>