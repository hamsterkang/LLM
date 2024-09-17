



<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Session timeout handling
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

// Initialize quizTypes in session
if (!isset($_SESSION['quizTypes'])) {
    $_SESSION['quizTypes'] = [];
}

// Store posted quiz types in the session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quizTypes'])) {
    $_SESSION['quizTypes'] = $_POST['quizTypes'];
}

// Initialize or update the current quiz type index
if (!isset($_SESSION['currentQuizTypeIndex'])) {
    $_SESSION['currentQuizTypeIndex'] = 0;
}

// Get the current quiz type to process
$currentQuizType = $_SESSION['quizTypes'][$_SESSION['currentQuizTypeIndex']] ?? null;

// Determine if it's the first quiz type
$isFirstQuizType = ($_SESSION['currentQuizTypeIndex'] === 1);
 // Check if it is the last quiz type
 $isLastQuizType = $_SESSION['currentQuizTypeIndex'] >= count($_SESSION['quizTypes']);
 
if ($currentQuizType) {
    // Increment for the next quiz type
    $_SESSION['currentQuizTypeIndex']++;

    // Determine the next URL based on the quiz type
    switch ($currentQuizType) {
        case 'short-answer':
            $nextUrl = '../user/AcademAI-Create-Identification.php';
            break;
        case 'essay':
            $nextUrl = '../user/AcademAI-Create-Essay.php';
            break;
        case 'mcq':
            $nextUrl = '../user/AcademAI-Create-MCQ.php';
            break;
        default:
            $nextUrl = '../user/AcademAI-Choose-Quiz-Type.php';
            break;
    }

    // Redirect to the chosen quiz creation page
    header("Location: $nextUrl");
    exit();
} else {
    // If there are no quiz types left to process, show the JavaScript alert
    echo '<script>
       window.onload = function() {
    const endDate = localStorage.getItem("endDate");
    const endTime = localStorage.getItem("endTime");

    console.log("End Date:", endDate);
    console.log("End Time:", endTime);

    if (!endDate || !endTime) {
       const redirectUrl = "../user/AcademAI-View-%20Creation-Quiz.php";
       window.location.href = redirectUrl;

    } else {
        // If both endDate and endTime are present, set a flag in localStorage
        console.log("End Date and End Time found. Setting flag for modal.");
        localStorage.setItem("showModal", "true");
        
        // Redirect to the page where the modal is located (Page B)
        window.location.href = "/user/AcademAI-Create-MCQ.php"; // Replace with the actual URL of the page with the modal
    }
};
    
    </script>';
}




?>
