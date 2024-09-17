<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

// Prevent caching of sensitive pages
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
    require_once('../include/extension_links.php');
    require_once("../tools/add-new-subject-criteria.php");
    


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
        
        <div class="add-new-subject-criteria">
             <div class="add-new-subject-criteria-btn" style="text-align: center;">
             <a href="#"data-bs-toggle="modal" data-bs-target="#add-new-subject-criteria-modal">Add new subject criteria</a>

        </div>
    </div>

    <div class="subject-container">
        <?php if (!empty($groupedCriteria)): ?>
            <?php foreach ($groupedCriteria as $subject_id => $data): ?>
                <div class="subject">
                    <form method="POST" action="../tools/add-new-subject-criteria.php"> <!-- Save script -->
                        <input type="hidden" name="subject_id" value="<?php echo $subject_id; ?>">
                        
                        <!-- Subject title editable when in edit mode -->
                        <h2 class="subject-title" contentEditable="false"><?php echo htmlspecialchars($data['title']); ?></h2>
                        
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
                                    <?php foreach ($data['criteria'] as $row): ?>
                                        <tr data-criteria-id="<?php echo $row['criteria_id']; ?>" data-subject-id="<?php echo $subject_id; ?>">
                                            <td><?php echo nl2br(htmlspecialchars($row['criteria_name'])); ?></td>
                                            <td><?php echo nl2br(htmlspecialchars($row['advanced_text'])); ?></td>
                                            <td><?php echo nl2br(htmlspecialchars($row['proficient_text'])); ?></td>
                                            <td><?php echo nl2br(htmlspecialchars($row['needs_improvement_text'])); ?></td>
                                            <td><?php echo nl2br(htmlspecialchars($row['warning_text'])); ?></td>
                                            <td><?php echo nl2br(htmlspecialchars($row['weight'])); ?></td>
                                            <td>
                                                <button type="button" id="remove-criteria-btn" class="delete-criteria-btn" onclick="removeCriterion(<?php echo $row['criteria_id']; ?>, this)">Remove</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Add, Save, and Cancel Buttons -->
                        <div class="add-save-btn mb-4 mt-3">
                                <div class="row">
                                    <div class="col-7 d-flex justify-content-start">
                                        <button type="button" class="add-criteria-btn" style="display: none;" onclick="addCriteria(<?php echo $subject_id; ?>)">Add Criteria</button>
                                    </div>
                                    <div class="col-5 d-flex justify-content-center">
                                    <a href="AcademAI-Essay-Editing-Rubric.php?subject_id=<?php echo $subject_id; ?>">
                                            <button type="button" class="edit-criteria-btn">Edit</button>
                                    </a>


                                        <button type="button" class="delete-criteria-btn" onclick="deleteCriteria(<?php echo $subject_id; ?>, <?php echo $row['criteria_id']; ?>)">Delete</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="no-subject-criteria-section">
            <img src="../img/add-folder.gif" class="no-subject-criteria-img">
            <p  class="no-subject-criteria"style="text-align: center;">No subject criteria have been created.</p>
        </div>
        <?php endif; ?>
    </div>
</div>
        
<!-- Modal -->
<div class="modal fade" id="add-new-subject-criteria-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modal-add-new-subject-criteria">  
    
    <form id="criteria-form" action="../tools/add-new-subject-criteria.php" method="POST">
    <div class= "btn-close-section">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="form-group">
        <label for="subject-title">Subject Title:</label>
        <input type="text" id="subject-title" name="title" required>
    </div>
    <div class="form-group">
        <label for="num-criteria">Number of rows for criteria:</label>
        <input type="number" id="num-criteria" name="num_criteria">
    </div>
    <div id="criteria-inputs"></div> <!-- Dynamic input fields will be added here -->
    
   
    <div class="criteria-levels">  
        <p>1.Advanced (100%)
        Default: Indicates outstanding performance. The system analyzes the essay and assigns this grade when the work exceeds expectations in all criteria, demonstrating exceptional understanding and execution.
        </p>
    </div>
    <div class="criteria-levels">  
        <p>
        2. Proficient (75%)
        Default: Reflects solid and competent performance. The system analyzes the essay and assigns this grade when the work meets the required standards with minimal errors, showing a good grasp of the subject.
        </p>
    </div>
    
    <div class="criteria-levels">  
        <p>
        3. Needs Improvement (50%)
        Default: Highlights areas that require further development. The system analyzes the essay and assigns this grade when the work shows basic understanding but lacks consistency or depth, needing significant enhancements.
        </p>
    </div>

   <div class="criteria-levels">  
        <p>
        4. Warning (25%)
        Default:Signals that the work is far below expectations. The system analyzes the essay and assigns this grade when the work demonstrates minimal understanding, with serious gaps that must be addressed to meet basic criteria.
        </p>
</div>

      <div class="submit-section">
          <a href="#" class="cancel-btn">Cancel</a>
          <button type="submit" class="submit-btn" name="Submit">Submit</button>

      </div>
      </form>
    </div>
  </div>
</div>
    </div>

<script>

// Function to open the modal
function openModal() {
    if (!isModalDisabled) {
        $('#add-new-subject-criteria-modal').modal('show');
        disableModalLink(); // Disable the modal link as soon as the modal opens
    }
}

// Disable the modal link and set the flag
function disableModalLink() {
    isModalDisabled = true;
    const modalLink = document.getElementById('open-modal');
    modalLink.classList.add('disabled');
    modalLink.style.pointerEvents = 'none'; 
    modalLink.style.color = 'gray'; 
}

// Enable the modal link when closing the modal
$('.modal').on('hidden.bs.modal', function () {
    isModalDisabled = false; // Reset the flag when closing
    const modalLink = document.getElementById('open-modal');
    modalLink.classList.remove('disabled');
    modalLink.style.pointerEvents = 'auto'; 
    modalLink.style.color = ''; // Reset color
});

</script>


<script>
function deleteSubject(subjectId, element) {
    if (confirm("Are you sure you want to delete this subject and all its criteria?")) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../tools/delete-subject.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        // Remove the subject container from the DOM
                        var subjectContainer = element.closest('.subject-container');
                        subjectContainer.remove();
                        alert("Subject deleted successfully!");
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


<script>
// Function to remove a criterion
function removeCriterion(criteriaId, button) {
    if (confirm("Are you sure you want to remove this criterion?")) {
        fetch('../tools/remove-criterion.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ criteria_id: criteriaId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the specific row from the DOM
                const row = button.closest('tr');
                row.parentNode.removeChild(row);
            } else {
                alert("Failed to remove criterion: " + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
}
</script>
<script>
// Function to delete criteria and subject
function deleteCriteria(subjectId, criteriaId) {
    if (confirm("Are you sure you want to delete this criterion and its associated subject details? This action cannot be undone.")) {
        // Create a FormData object to handle the POST request properly
        const formData = new FormData();
        formData.append('subject_id', subjectId);
        formData.append('criteria_id', criteriaId);

        fetch('../tools/delete-criteria.php', {
            method: 'POST',
            body: formData // Send the FormData object
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove the specific criterion row from the DOM
                const criterionRow = document.querySelector(`tr[data-criteria-id='${criteriaId}'][data-subject-id='${subjectId}']`);
                if (criterionRow) {
                    criterionRow.parentNode.removeChild(criterionRow);
                }

                // Check if there are any remaining criteria for this subject
                const remainingCriteria = document.querySelectorAll(`tr[data-subject-id='${subjectId}']`);
                if (remainingCriteria.length === 0) {
                    // Remove subject details if no remaining criteria
                    const subjectContainer = document.querySelector(`.subject input[name="subject_id"][value='${subjectId}']`).closest('.subject');
                    if (subjectContainer) {
                        subjectContainer.parentNode.removeChild(subjectContainer);
                    }
                }
            } else {
                alert("Failed to delete criterion and associated subject details: " + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    }
}


</script>


</body>
</html>

