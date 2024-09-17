

<?php
    require_once('../include/extension_links.php');
    require_once("../tools/add-new-subject-criteria.php");

    
// Retrieve subject_id from URL
$subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : null;

?>


?>



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
        <?php if ($subject_id && !empty($groupedCriteria[$subject_id])): ?>
            <?php 
            // Get the data for the specified subject
            $data = $groupedCriteria[$subject_id]; 
            ?>
            <div class="subject">
                <form method="POST" action="../tools/add-new-subject-criteria.php"> <!-- Update this to your actual save script -->
                    <input type="hidden" name="subject_id" value="<?php echo htmlspecialchars($subject_id); ?>"> <!-- To identify the subject -->
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
                            <tbody class="predefined-criteria" id="criteria-table-body-<?php echo htmlspecialchars($subject_id); ?>">
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
                                                    <input type="number" name="weight[]" value="<?php echo htmlspecialchars($row['weight']); ?>" step="0.01" required>
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
                    </div>
            
            </div>   
            <!-- Add, Save, and Cancel Buttons -->
            <div class="add-save-btn mb-4">
                <div class="row">
                    <div class="col-7 d-flex justify-content-start">
                        <button type="button" class="add-btn-criteria btn btn-sm" id="add-another-<?php echo htmlspecialchars($subject_id); ?>" name="add-another" onclick="addCriteria(<?php echo htmlspecialchars($subject_id); ?>)">
                            Add Criteria
                        </button>
                    </div>
                    <div class="col-5 d-flex justify-content-center">
                        <button type="submit" class="save-criteria-btn" name="Save">Save</button>
                        <button type="button" class="cancel-criteria-btn-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
            </form>
        <?php else: ?>
            <p>No subject or criteria found. Please select a valid subject.</p>
        <?php endif; ?>
    </div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-content-confirmation">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Are you sure you want to cancel this?
      </div>
      <div class="modal-footer modal-footer-cancel-editing">
         <a href="AcademAI-Essay-Viewing-Rubric-Setting.php"><button type="button" class=" btn-yes-cancel-editing " data-bs-dismiss="modal">Yes, cancel</button></a>
         <button type="button" class="btn-no-keep-on-editing "data-bs-dismiss="modal">No, keep on editing</button>
      </div>
    </div>
  </div>
</div>





        
        
  
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







</script>


</body>
</html>