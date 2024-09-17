<?php
require_once('../include/extension_links.php');
session_start();

// Check session timeout
$timeout_duration = 1800;
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();
    }
    $_SESSION['last_activity'] = time();
} else {
    header('Location: login.php');
    exit();
}

require_once('../include/extension_links.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-create-quiz-room.css">
    <title>Create Quiz</title>
</head>

<body>
<?php
require_once '../include/academAI-sidebar.php';
?>

<div class="create-quiz-room video-container">
    <div class="create-quiz-room-overlay"></div>
    <div class="slide slide1">
        <video autoplay muted loop class="bg-video">
            <source src="../img/Untitled design.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="container quiz-container">
            <div class="container quiz-description">
                <div class="quiz-icon">
                    <img src="../img/light-logo-img.png" alt="Icon" class="iconcreatequiz">
                </div>
                <h3 class="quiz-now">Create Quiz Now</h3>
                <span class="typing-animation"></span>
                <form action="../tools/create-quiz-1st.php" method="post"> <!-- Form tag added -->
                    <div class="form-group quiz-description-form-group">
                        <label for="quizSubject" class="quiz-subject">Subject:</label>
                        <input type="text" class="form-control" id="quizSubject" name="quizSubject" placeholder="Enter Subject" required>
                    </div>
                    <div class="form-group quiz-description-form-group">
                        <label for="quizTitle" class="quiz-title">Title:</label>
                        <input type="text" class="form-control" id="quizTitle" name="quizTitle" placeholder="Enter Quiz Title" required>
                    </div>
                    <div class="form-group quiz-description-form-group">
                        <label for="quizDescription" class="quiz-description-text">Description:</label>
                        <textarea class="form-control" id="quizDescription" name="quizDescription" rows="3" placeholder="Enter Quiz Description" required></textarea>
                    </div>
                    <div class="button-container">
                    <button type="button" class="back-button" onclick="window.location.href='AcademAI-Quiz-Room.php'">Back</button>
                        <button type="submit" class="create-button">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="quiz-animation.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textElement = document.querySelector('.quiz-now');

        // Trigger typing animation
        textElement.classList.add('typing-animation');

        // Reset animation when it ends
        textElement.addEventListener('animationiteration', function(event) {
            const animationName = event.animationName;
            if (animationName === 'typing') {
                textElement.classList.remove('typing-animation');
                void textElement.offsetWidth; // Trigger reflow
                textElement.classList.add('typing-animation');
            }
        });
    });
</script>
</body>
</html>
