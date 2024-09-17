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
    <link rel="stylesheet" href="../css/academAI-join-quiz-multiple-choice.css">
    <title>Document</title>
</head>
<body>
    
<div class="mcq-container">
    <div class="container formultiplechoice">
     <div class="upper-avatar-sound-section">
        <div class="avatar">
        <img src="../img/avatar-4.gif" id="avatar">
        <p class="jumping-text">Rhea Jenn!</p>

</div>
    <div id="audioToggle mt-5">
        <i id="audioIcon" class="fas fa-volume-up"></i> <!-- Font Awesome volume up icon -->
    </div>
</div>
        <div class="container insidemultiplechoice">
        
            <header>
                <div class="author-info">Created By: Maxine A. delacruz</div>
                <div class="date-time-info">March 25, 2024 10:00 AM</div>
            </header>
            <main class="d-grid">
                <h1>Ancient Civilizations Quiz</h1>
                <p class="descrip">Test your knowledge of ancient history, from Mesopotamia to Rome!</p>
                <p clas="subject">Subject: History</p>
            </main>

        
            <div class="quiz-container">
                <div class="question">
                    <div id="timer"></div>
                    <p class="question-number">Question 1:</p>
                    <p class="question-text">Which ancient civilization is credited with the invention of writing?</p>
                </div>
                <div class="answers">
                    <div class="answerab">
                    <div class="answer-container answera">
                        <input type="radio" name="answer" value="a" id="answer-a">
                        <label class="radio-custom" data-letter="A" for="answer-a"></label>
                        <span class="answer-text">Mesopotamia</span>
                    </div>
                    <div class="answer-container answerb">
                        <input type="radio" name="answer" value="b" id="answer-b">
                        <label class="radio-custom" data-letter="B" for="answer-b"></label>
                        <span class="answer-text">Ancient Egypt</span>
                    </div>
                </div>
                <div class="answercd">
                    <div class="answer-container answerc">
                        <input type="radio" name="answer" value="c" id="answer-c">
                        <label class="radio-custom" data-letter="C" for="answer-c"></label>
                        <span class="answer-text">Indus Valley Civilization</span>
                    </div>
                    <div class="answer-container answerd">
                        <input type="radio" name="answer" value="d" id="answer-d">
                        <label class="radio-custom" data-letter="D" for="answer-d"></label>
                        <span class="answer-text"> Ancient China</span>
                    </div>
                </div>
                </div>
            </div>

        

                <div class="next-icons">
                         <a href="AcademAI-Join-Quiz-Identification.php"><button class="next-button">Next <i class="fas fa-arrow-right"></i></button>
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
        </script>
        
        <script>
            $(document).ready(function() {
                // Attach click event listener to the next button
                $('#next-button').click(function() {
                    // Send AJAX request to fetch the new content
                    $.ajax({
                        url: 'next-page-content.html', // URL of the server endpoint that returns the new content
                        method: 'GET',
                        success: function(response) {
                            // Replace the content of the placeholder with the fetched content
                            $('#content-placeholder').html(response);
                        },
                        error: function() {
                            console.error('Error fetching content');
                        }
                    });
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
