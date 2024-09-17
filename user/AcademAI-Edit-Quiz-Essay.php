<?php
    require_once('../include/extension_links.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-edit-quiz-essay.css">   
    <title>Multiple Choice</title>
</head>
<body>



    <div class="mcq-container">
   <div class="video-container">

     
   <div class="container set-container">
    <div class="form submitform">
    <h1> Essay</h1>
        <div class="separate">

            <div class="separateform">

                   <div class="containerdate">
                   <div class="date col2">
                        <div class="form-group d-grid">
                            <label for="start-date">Start Date:</label>
                            <input type="date" id="start-date" name="start-date" value="2024-04-11" required>
                        </div>
                        <div class="form-group d-grid">
                            <label for="start-time">Start Time:</label>
                            <input type="time" id="start-time" name="start-time" value="10:00" required>
                        </div>
                    </div>

                   </div>
             
             <div class="containerendate">
                <div class="dateend">
                    <div class="form-group d-grid">
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" name="end-date"value="2024-04-12" required>
                    </div>
                    <div class="form-group d-grid">
                        <label for="end-time">End Time:</label>
                        <input type="time" id="end-time" name="end-time" value="22:00" required>
                    </div>
                </div>
            </div>
        </div>
     
            <div class="container limit-con">
                <div class="date col">
                    <label for="time-limit">Time Limit:</label>
                    <div class="form-group minutes-choice">
                        <input type="number" id="time-limit-minutes" placeholder="10"name="time-limit-minutes" min="0" required style="width: 73%;">
                        <select id="time-limit-seconds" name="time-limit-seconds" required>
                            <option value="minutes">minutes</option>
                            <option value="seconds">seconds</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class="limitconpar">/*Note:This will apply to all the items*/</p>

            <div class="container numberitem">
                <div class="input-group number-of-quiz">
                    <!-- Number of Quiz Input -->
                    <label for="num-quiz">Number of Quiz:</label>
                    <input type="number" placeholder="3" id="num-quiz" name="num-quiz" min="1" required>
                </div>
              
                <div class="input-group num-per-point">
                    <!-- Points per Item Input -->
                    <label for="num-points">Points per Item:</label>
                    <input type="number" placeholder="10"id="num-points" name="num-points" min="1" required>
                </div>
                <div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>


                <label for="limit-word">Word Limit</label>
                        <div class="input-group word-limit-count">
                            
                        <label for="minimum">Minimum:</label>
                        <input type="number" id="minimum" name="limit-word" min="1" required>
                        <label for="maximum">Maximum:</label>
                        <input type="number" id="maximum" name="limit-word" min="1" required>
                    </div>

            
                
                <div class="form-check ">
                  <div class="row mt-5 mb-4">
                         <label class="col-auto" for="restriction-checkbox" >Restriction: Close after quiz after due time</label>
                 <div class="col-auto">
                         <input type="checkbox" class="form-check-input" id="restriction-checkbox" checked>
                  </div>
                </div>
                </div>


             
            </div>
    </div> 

    
<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="Discuss the causes and consequences of the French Revolution." name="question">
                            <span class="number-essay">1.</span>
                            <span class="rubric-icon"><a href="AcademAI-Set-Essay-Rubric.php" class="rubric-link">Set Rubrics</a></span>
                        </div>
                    </div> 
                    <div class="container typequestionhere-essay">
                        <div class="input-wrapper dropdownminute-essay">
                            <div class="dropdown">
                                <input type="number" placeholder="10" id="time-limit-essay" name="time-limit" min="0">
                                <select name="time-limit-unit" id="time-limit-unit-essay">
                                    <option value="minutes">minutes</option>
                                    <option value="seconds">seconds</option>
                                </select>
                            </div>
                        </div>
                    
                            <div class="input-wrappe dropdownminute">
                                <input type="number" id="points-essay" placeholder="10 Points" name="points" min="0">
                            </div>
                        </div>

                        <div class="word-limit-per">
                        <input type="number" id="minimum-per" placeholder="minimum word limit" name="limit-word" min="1" required>
                        <input type="number" id="maximum-per" placeholder="maximum word limit" name="limit-word" min="1" required>
                        </div>
                        


                    <div class="input-wrapper dropdownminute">
                        <div class="input-box">
                        <p id="answer-essay"> The French Revolution, which began in 1789, was fueled by a combination of social, political, and economic factors.Socioeconomic inequality, high taxation, and widespread discontent among the lower classes created a fertile ground for revolution.Additionally, Enlightenment ideals such as liberty, equality, and fraternity inspired revolutionary fervor.The revolution led to the overthrow of the monarchy, the establishment of a republic, and radical social and political changes, including the Reign of Terror.However, it also resulted in internal divisions, external conflicts, and the rise of Napoleon Bonaparte, who eventually seized power and established himself as Emperor.</p>

                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="file-input-wrapper">
                            <button id="upload-btn">Upload File</button>
                            <input id="input-2" name="input2[]" type="file" class="file" multiple>
                        </div>
                        
                    </div>
                </div>
            </div>


            <div class="add-section">
                        <div class="addquestion"><i class="fas fa-plus-circle"></i></div>
            </div>

          
    <div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="Analyze the impact of colonialism on indigenous populations." name="question">
                            <span class="number-essay">2.</span>
                            <span class="rubric-icon"><a href="AcademAI-Set-Essay-Rubric.php" class="rubric-link">Set Rubrics</a></span>
                        </div>
                    </div> 
                    <div class="container typequestionhere-essay">
                        <div class="input-wrapper dropdownminute-essay">
                            <div class="dropdown">
                                <input type="number" placeholder="5 " id="time-limit-essay" name="time-limit" min="0">
                                <select name="time-limit-unit" id="time-limit-unit-essay">
                                    <option value="minutes">minutes</option>
                                    <option value="seconds">seconds</option>
                                </select>
                            </div>
                        </div>


                    
                            <div class="input-wrappe dropdownminute">
                                <input type="number" id="points-essay" placeholder="5 Points" name="points" min="0">
                            </div>
                        </div>

                        
                        <div class="word-limit-per">
                        <input type="number" id="minimum-per" placeholder="minimum word limit" name="limit-word" min="1" required>
                        <input type="number" id="maximum-per" placeholder="maximum word limit" name="limit-word" min="1" required>
                        </div>

                    <div class="input-wrapper dropdownminute">
                        <div class="input-box">
                        <p id="answer-essay2"> Colonialism had profound and often devastating effects on indigenous populations around the world. European powers exploited natural resources, imposed forced labor, and enforced discriminatory policies that marginalized indigenous peoples. Cultural practices were suppressed, languages were eradicated, and traditional ways of life were disrupted. </p>
                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="file-input-wrapper">
                            <button id="upload-btn">Upload File</button>
                            <input id="input-2" name="input2[]" type="file" class="file" multiple>
                        </div>
                        
                    </div>
                </div>
            </div>

  
        
            
<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="How did the Renaissance impact modern society?" name="question">
                            <span class="number-essay">3.</span>
                            <span class="rubric-icon"><a href="AcademAI-Set-Essay-Rubric.php" class="rubric-link">Set Rubrics</a></span>
                        </div>
                    </div> 
                    <div class="container typequestionhere-essay">
                        <div class="input-wrapper dropdownminute-essay">
                            <div class="dropdown">
                                <input type="number" placeholder="10" id="time-limit-essay" name="time-limit" min="0">
                                <select name="time-limit-unit" id="time-limit-unit-essay">
                                    <option value="minutes">minutes</option>
                                    <option value="seconds">seconds</option>
                                </select>
                            </div>
                        </div>
                    
                            <div class="input-wrappe dropdownminute">
                                <input type="number" id="points-essay" placeholder="10 Points" name="points" min="0">
                            </div>
                        </div>

                        <div class="word-limit-per">
                        <input type="number" id="minimum-per" placeholder="minimum word limit" name="limit-word" min="1" required>
                        <input type="number" id="maximum-per" placeholder="maximum word limit" name="limit-word" min="1" required>
                        </div>
                        


                    <div class="input-wrapper dropdownminute">
                        <div class="input-box">
                            <input type="text" id="answer-essay3" placeholder="Type your answer here" name="answer">
                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="essay-file-pdf-wrapper">
                           <img src="../img/pdf.png">
                           <p class="essayfile">MyEssayQuestion.pdf</p>
                        </div>
                        
                    </div>
                </div>
            </div>
       
        

            <div class="button-next"><!-- Back Button Icon -->
             <button class="next-button"id="submit-edited-modalBtn"data-bs-toggle="modal" data-bs-target="#submit-edited-modal">
                <i class="fas fa-arrow-right"></i> Submit
            </button>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>





<div id="check-modal" class="modal">
    <div class="modal-content" id="check-modal-content">
        <div class="half-image">
            <img src="../img/modal/modal-img.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <div class="submit-content-view">
            <p class="submit-text-view">You have sucessfully edited your quiz!</p> <!-- Text -->
            <a href="AcademAI-Library-Completed-View-Card.php" class="view-btn">View the newly edited quiz</a> <!-- Cancel Button -->
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="submit-edited-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content" id="submit-edited-modal-content">
        <span class="close">&times;</span>
        <p class="people-with-access">People with accesss to the quiz</p>
        <form action="#" class="people-acess">
            <div class="form-group add-access">
                <label for="email">Email:</label>
                <input type="email" id="email-add-acess" name="email" placeholder="Enter email...">
            </div>
            <div class="add-accessbtn">
            <button type="button" id="add-access-btn">Add Access</button>
          </div>
            <!-- Here you can list the people who have access -->
            <div id="access-list">
                <!-- Access list will be populated dynamically -->
            </div>
        </form>

        <div class="general-access">
    <p class="people-with-access">General access to the quiz</p>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="restriction-checkbox">
        <label class="form-check-label" for="restriction-checkbox">People who joined the quiz room will automatically have access to retake the quiz</label>
    </div>
</div>


        <div class="submit-content">
            <a href="#" class="yes-btn">Submit</a> <!-- Yes Button -->
            <a href="#" class="cancel-btn">Cancel</a> <!-- Cancel Button -->
           
        </div>
    </div>
  </div>
</div>
<script>
    // JavaScript for the first modal
    var modal = document.getElementById("submit-edited-modal");
    var btn = document.getElementById("submit-edited-modalBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

   // JavaScript for triggering the second modal
var yesButton = document.querySelector('#submit-edited-modal .yes-btn');
yesButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default anchor tag behavior
    document.getElementById('submit-edited-modal').style.display = 'none';
    document.getElementById('check-modal').style.display = 'block';
});

</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const addSection = document.querySelector('.add-section');
    const secondForm = document.querySelector('.container-fluid.typequestionall-essay:nth-of-type(2)'); // Ensure this selector is correct

    if (!secondForm) {
        console.error('Second form not found');
        return;
    }

    function checkScroll() {
        const rect = secondForm.getBoundingClientRect();
        const formBottom = rect.bottom;
        const windowHeight = window.innerHeight;

        // Show the button when the second form is in view
        if (formBottom <= windowHeight) {
            addSection.style.display = 'block';
        } else {
            addSection.style.display = 'none';
        }

        // Keep the button visible if the user has scrolled past the second form
        if (window.scrollY + windowHeight > document.body.offsetHeight) {
            addSection.style.display = 'block';
        }
    }

    // Check scroll position on load and scroll
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Initial check
});


    </script>
    

<!-- Your remaining HTML code -->

</body>
</html>

</body>
</html>