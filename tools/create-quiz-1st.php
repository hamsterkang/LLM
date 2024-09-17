<?php
session_start();

// Store form data in session
$_SESSION['quizSubject'] = $_POST['quizSubject'];
$_SESSION['quizTitle'] = $_POST['quizTitle'];
$_SESSION['quizDescription'] = $_POST['quizDescription'];

// Redirect to the next step
header("Location: ../user/AcademAI-Choose-Quiz-Type.php");
exit();
?>
