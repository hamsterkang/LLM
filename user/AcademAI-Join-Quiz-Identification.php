<?php
    require_once('../include/extension_links.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/academAI-join-quiz-identification.css">
    <title>Document</title>
</head>
<body>
<div class="mcq-container">

     <div class="container displayshort">
    <div class="upper-avatar-sound-section">
        <div class="avatar">
            <img src="../img/avatar-4.gif" id="avatar">
            <p class="jumping-text">Rhea Jenn!</p>
</div>
    <div id="audioToggle mt-5">
        <i id="audioIcon" class="fas fa-volume-up"></i> <!-- Font Awesome volume up icon -->
    </div>
</div>
        <div class="displayword">
            <header>
                <div class="author-info">Created By: Maxine A. delacruz</div>
                <div class="date-time-info">March 25, 2024 10:00 AM</div>
            </header>
            <main class="d-grid">
                <h1>Ancient Civilizations Quiz</h1>
                <p class="descrip">Test your knowledge of ancient history, from Mesopotamia to Rome!</p>
                <p clas="subject">Subject: History</p>
            </main>
            <div class="containeranswer ">
                <div class="question">
                    <div id="timer"></div>
                    <p class="question-number">Question 1</p>
                    <p class="question-text"> Who was the first female pharaoh of Ancient Egypt?</p>
                </div>
                <div class="answer">
                    <input type="text" id="answerword" name="answer" placeholder="Please type your answer here">
                </div>
            </div>
            
            <div class="next-icons">
            <a href="AcademAI-Join-Quiz-Essay.php"><button class="next-button">Next <i class="fas fa-arrow-right"></i></button>
            </div>
 
        </div>
    </div>
</div>
</div>
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
        
        $(document).ready(function() {
            // Attach click event listener to the next button
            $('.next-button').click(function() {
                // Replace the content of the quiz-container with containeranswer
                $('.quiz-container').html(`
                    <div class="containeranswer">
                        <div class="question">
                            <div id="timer"></div>
                            <p class="question-number">Question 1</p>
                            <p class="question-text">What is the capital of France?</p>
                        </div>
                        <div class="answer">
                            <input type="text" id="answerword" name="answer" placeholder="please type your answer here">
                        </div>
                    </div>
                `);
            });
        });
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