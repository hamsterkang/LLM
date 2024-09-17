<?php
    require_once('../include/extension_links.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/academAI-join-quiz-essay.css">
    <title>Document</title>
</head>
<body>

<div class="mcq-container">
  <div class="container essaysort">
  <div class="upper-avatar-sound-section">
        <div class="avatar">
            <img src="../img/avatar-4.gif" id="avatar">
            <p class="jumping-text">Rhea Jenn!</p>
</div>
    <div id="audioToggle mt-5">
        <i id="audioIcon" class="fas fa-volume-up"></i> <!-- Font Awesome volume up icon -->
    </div>
</div>
    <div class="essaydisplay">
        <header>
            <div class="author-info">Created By: Maxine A. delacruz</div>
            <div class="date-time-info">March 25, 2024 10:00 AM</div>
        </header>
        <main class="d-grid">
                <h1>Ancient Civilizations Quiz</h1>
                <p class="descrip">Test your knowledge of ancient history, from Mesopotamia to Rome!</p>
                <p clas="subject">Subject: History</p>
            </main>
    
        <div class="containeranswer">
            <div class="question">
                <div class="toptimer">     
                     <div id="timer"></div> 
                     <a href="AcademAI-Join-Quiz-Essay-Rubric.php" class="rubric-link">See Rubrics</a>
             </div>
                
                <p class="question-number">Essay Question 1</p>
                <p class="question-text">Evaluate the impact of climate change on biodiversity?</p>
            </div>
            <div class="answer">
                <textarea id="answeressay" name="answer"  placeholder="Please type your answer here"></textarea>
            </div>
            <div class="half">or</div>

            <div class="form-group fileupload">
                <label class="col control-label">
                    Attachment(s) You can upload your files here
                </label>
                <div class="file-input-wrapper">
                    <button id="upload-btn">Upload File</button>
                    <input id="input-2" name="input2[]" type="file" class="file" multiple>
                </div>
            </div>

        </div>
        <button type="submit" id="submit-quiz-modalBtn" class="submit-button" data-bs-toggle="modal" data-bs-target="#submit-quiz-modal">
    <i class="fas fa-upload"></i> Submit
</button>

    </div>


  </div>

  


<!-- Modal -->
<div class="modal fade" id="submit-quiz-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
        <span class="close">&times;</span>
        <div class="half-image">
            <img src="../img/modal/modal-8.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-3.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
        
        </form>
        <div class="submit-content">
            <p class="submit-text">Are you sure you want to submit this quiz now?</p> <!-- Text -->
            <div class="yes-btn-section">
            <a href="AcademAI-Animation-Checking.php" class="yes-btn">Yes</a> <!-- Yes Button -->
            <a href="AcademAI-Join-Quiz-Essay.php" class="cancel-btn">No</a> <!-- Cancel Button -->
        </div>
        </div>
    </div>
  </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('submit-quiz-modal'), {
            keyboard: false
        });

        var closeButton = document.querySelector('#submit-quiz-modal .close');
        closeButton.addEventListener('click', function () {
            myModal.hide();
        });

        var cancelButton = document.querySelector('#submit-quiz-modal .cancel-btn');
        cancelButton.addEventListener('click', function () {
            myModal.hide();
        });

        var yesButton = document.querySelector('#submit-quiz-modal .yes-btn');
        yesButton.addEventListener('click', function () {
            // Add functionality for the "Yes" button if needed
            myModal.hide();
        });
    });
</script>



  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('input-2');
        const uploadButton = document.querySelector('.file-input-wrapper button');

        fileInput.addEventListener('change', function() {
            uploadButton.classList.add('animate');
            setTimeout(() => {
                uploadButton.classList.remove('animate');
            }, 1000);
        });
    });
</script>
  
<script>
    // Set the target date (e.g., 10 minutes from now)
    const targetDate = new Date();
    targetDate.setMinutes(targetDate.getMinutes() + 1);
    
    // Update the countdown every second
    const timerInterval = setInterval(updateCountdown, 1000);
    
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;
    
        // Calculate minutes and seconds
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
        // Display the countdown timer
        document.getElementById("timer").innerHTML = "Time Remaining: " + minutes + "m " + seconds + "s ";
    
        // If the countdown is finished, display a message and clear the interval
        if (distance < 0) {
            clearInterval(timerInterval);
            document.getElementById("timer").innerHTML = "Time's up!";
        }
    }
    </script>
    
<script>
        var audio = new Audio("../img/quiz-sound.mp3");
        var audioIcon = document.getElementById("audioIcon");

        // Initialize audio loop
        audio.loop = true;
        audio.play(); // Start playing the audio

        // Function to toggle active class on icon click
        function toggleActive() {
            audioIcon.classList.toggle("active");
        }

        // Toggle audio playback and active class when clicking the icon
        audioIcon.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
            toggleActive();
        });
    </script>
    </body>
</html>