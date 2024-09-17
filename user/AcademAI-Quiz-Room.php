<?php
session_start();
// Set session timeout duration (e.g., 30 minutes)
$timeout_duration = 1800;

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Check if session has expired
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
        // Session expired, log the user out
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit();
    }
    $_SESSION['last_activity'] = time(); // Update last activity time
} else {
    // Redirect to login page if not logged in
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
    <link rel="stylesheet" href="../css/quiz_room.css">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <title>Quiz Room</title>
</head>
<body>

<?php
require_once '../include/academAI-sidebar.php';
?>

<div class="video-overlay"></div>
<div class="slide slide1">
  <video autoplay muted loop class="bg-video">
    <source src="../img/bg-1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>

<div class="creation-of-quizzes">
    <div class="create-join-section">
        <div class="col-2 green-section"></div>
        <div class="col d-grid create-join-quiz-btn">
            <input type="text" class="form-control code" placeholder="Enter Code">
            <button class="join" id="join-card-modalBtn" data-bs-toggle="modal" data-bs-target="#join-card-modal">Join Quiz Room</button>
            <div class="d-flex or-section">
                <div class="or-txt-left"></div>
                <div class="or-txt">or</div>
                <div class="or-txt-right"></div>
            </div>
            <a href="AcademAI-Create-Quiz-Room.php"><button class="create">Create Quiz Room</button></a>
        </div>
        <div class="col-6 green-section"></div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="login-success-modal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-content-login-success-modal">
      <div class="modal-header modal-header-login-success">
        <h5 class="modal-title" id="loginSuccessModalLabel">Login Successful</h5>
      </div>
      <div class="modal-body">
        <?php
        // Display the success message from the session
        if (isset($_SESSION['login_success'])) {
            echo $_SESSION['login_success'];
            unset($_SESSION['login_success']); // Clear the success message
        } else {
            echo "No success message to display."; // Debug message
        }
        ?>
      </div>
      <div class="modal-footer modal-footer-success-login">
        <button type="button" class="btn-close-success-login" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Join Card Modal -->
<div class="modal fade" id="join-card-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="half-image">
        <img src="../img/modal/modal-1.gif" alt="First Image" style="width: 100%; height: 100%;">
      </div>
      <img src="../img/modal/modal-q-1.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
      <form action="#">
        <!-- Your form elements go here -->
      </form>
      <div class="submit-content">
        <p class="submit-text">Are you sure you want to start this quiz now?</p> <!-- Text -->
        <div class="yes-btn-section">
          <a href="AcademAI-Join-Quiz-MCQ.php" class="yes-btn">Yes</a> <!-- Yes Button -->
          <a href="AcademAI-Activity-Upcoming-Card.php" class="cancel-btn">No</a> <!-- Cancel Button -->
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Show the success modal if the query parameter 'success' is set
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        var loginSuccessModal = new bootstrap.Modal(document.getElementById('login-success-modal'), {
            keyboard: false
        });
        loginSuccessModal.show();
    }
});
</script>

<script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.pushState(null, null, location.href);
    };
</script>

</body>
</html>
