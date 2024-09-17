<?php
    require_once('../include/extension_links.php');
    session_start();

    // Assuming session management and quiz type processing have already been done in create-quiz-2nd.php

    // Check if the current quiz type is the first one being processed
    $isFirstQuizType = isset($_SESSION['currentQuizTypeIndex']) && $_SESSION['currentQuizTypeIndex'] == 1;
    echo "<script>console.log('Is first quiz type: " . ($isFirstQuizType ? 'true' : 'false') . "');</script>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/academAI-create-identification.css">
    <title>Identification</title>
</head>
<body>
<style>
        .separateform {
            <?php if (!$isFirstQuizType): ?>
            display: none;
            <?php endif; ?>
        }
    </style>

<div class="mcq-container">

 <div class="container shortcontainer">
    <div class="form submitformshort">
    <h1>Identification</h1>
<div class="separatetop">

<div class="separateform">

<div class="containerdate">
    <div class="date-section-start col2">
        <div class="form-group d-grid">
            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" name="start-date" required>
        </div>
        <div class="form-group d-grid">
            <label for="start-time">Start Time:</label>
            <input type="time" id="start-time" name="start-time" required>
        </div>
    </div>
</div>

<div class="containerendate">
<div class="dateend">
 <div class="form-group d-grid">
     <label for="end-date">End Date:</label>
     <input type="date" id="end-date" name="end-date" required>
 </div>
 <div class="form-group d-grid">
     <label for="end-time">End Time:</label>
     <input type="time" id="end-time" name="end-time" required>
 </div>
</div>
</div>
</div>
   
    <div class="container limit-con">
        <div class="date col">
            <label for="time-limit">Time Limit:</label>
            <div class="form-group minutes-choice">
                <input type="number" id="time-limit-minutes" name="time-limit-minutes" min="0" required style="width: 73%;">
                <select id="time-limit-seconds" name="time-limit-seconds" required>
                    <option value="seconds">seconds</option>
                    <option value="minutes">minutes</option>
                </select>
            </div>
        </div>
    </div>
    <p class="limitconpar">/*Note:This will apply to all the items*/</p>

    <div class="container numberitem">
        <div class="input-group number-of-quiz">
            <!-- Number of Quiz Input -->
            <label for="num-quiz">Number of Quiz:</label>
            <input type="number" id="num-quiz" name="num-quiz" min="1" required>
        </div>
    
        <div class="input-group number-of-points">
            <!-- Points per Item Input -->
            <label for="num-points">Points per Item:</label>
            <input type="number" id="num-points" name="num-points" min="1" required>
        </div>
        <div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>
       
    </div>

    
 

</div>


<div class="container-fluid typequestionall">

    <div class="container-fluid typequestion">
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="question" placeholder="Please type your question here" name="question">
                <span class="number">1.</span> <!-- Number inside the box -->
                <span class="delete-icon"><i class="fas fa-trash"></i></span><!-- Delete icon -->
            </div>
        </div> 

        <div class="container typequestionhere">
            <div class="input-wrapper dropdownminute">
                <div class="dropdown">
                    <input type="number" placeholder="Time limit" id="time-limit" name="time-limit" min="0">
                    <select name="time-limit-unit" id="time-limit-unit">
                        <option value="minutes">minutes</option>
                        <option value="seconds">seconds</option>
                    </select>
                </div>
            </div>
         
                <div class="input-wrappe dropdownminute">
                    <input type="number" id="points" placeholder="points" name="points" min="0">
            </div>
        </div>
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="answer" placeholder="Type your answer here" name="answer">
            </div>
        </div>

        
    </div>
        
   

</div>

<div class="add-section">
            <div class="addquestion"><i class="fas fa-plus-circle"></i></div>
</div>




<div class="container-fluid typequestionall">

    <div class="container-fluid typequestion">
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="question" placeholder="Please type your question here" name="question">
                <span class="number">2.</span> <!-- Number inside the box -->
                <span class="delete-icon"><i class="fas fa-trash"></i></span><!-- Delete icon -->
            </div>
        </div> 

        <div class="container typequestionhere">
            <div class="input-wrapper dropdownminute">
                <div class="dropdown">
                    <input type="number" placeholder="Time limit" id="time-limit" name="time-limit" min="0">
                    <select name="time-limit-unit" id="time-limit-unit">
                        <option value="minutes">minutes</option>
                        <option value="seconds">seconds</option>
                    </select>
                </div>
            </div>
  
                <div class="input-wrappe dropdownminute">
                    <input type="number" id="points" placeholder="points" name="points" min="0">

            </div>
        </div>
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="answer" placeholder="Type your answer here" name="answer">
            </div>
        </div>
        
    </div>
 

</div>
 

<div class="container-fluid typequestionall">

    <div class="container-fluid typequestion">
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="question" placeholder="Please type your question here" name="question">
                <span class="number">3.</span> <!-- Number inside the box -->
                <span class="delete-icon"><i class="fas fa-trash"></i></span><!-- Delete icon -->
            </div>
        </div> 

        <div class="container typequestionhere">
            <div class="input-wrapper dropdownminute">
                <div class="dropdown">
                    <input type="number" placeholder="Time limit" id="time-limit" name="time-limit" min="0">
                    <select name="time-limit-unit" id="time-limit-unit">
                        <option value="minutes">minutes</option>
                        <option value="seconds">seconds</option>
                    </select>
                </div>
            </div>
     
                <div class="input-wrappe dropdownminute">
                    <input type="number" id="points" placeholder="points" name="points" min="0">
                </div>
     
        </div>
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="answer" placeholder="Type your answer here" name="answer">
            </div>
        </div>
    </div>
 

</div>

<div class="button-container">
<!-- Back Button -->
<button class="back-button" type="button" onclick="goBack();">
    <i class="fas fa-arrow-left"></i> Back
</button>


<form method="post" action="../tools/create-quiz-2nd.php">
    <button type="submit" name="next" class="next-button" id="next-button">
        <i class="fas fa-arrow-right"></i> Next
    </button>
</form>


</div>
</div>

</div>
</div>  
</div>




<script>
    function goBack() {
        // Redirect to the previous page
        history.back();
    }
</script>

<!-- Modal -->
<div class="modal fade" id="create-card-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="half-image">
            <img src="../img/modal/modal-16.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-q-1.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
            <!-- Your form elements go here -->
        </form>
        <div class="submit-content">
            <p class="submit-text">Do you want to close this quiz after due?</p> <!-- Text -->
        <div class="yes-no">
            <a href="AcademAI-View- Creation-Quiz.php" class="yes-btn">Yes</a> <!-- Yes Button -->
            <a href="AcademAI-Create-Essay.php" class="cancel-btn">No</a> <!-- Cancel Button -->
        </div>
        </div>
    </div>
  </div>
</div>
<!-- Modal -->


<script>
document.addEventListener('DOMContentLoaded', function() {
    const addSection = document.querySelector('.add-section');
    const secondForm = document.querySelector('.container-fluid.typequestionall:nth-of-type(2)'); // Ensure this selector is correct

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addSection = document.querySelector('.add-section');
    const secondForm = document.querySelector('.container-fluid.typequestionall:nth-of-type(2)'); // Ensure this selector is correct

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


</body>
</html>