<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: ../user/AcademAI-Quiz-Room.php'); // Redirect to dashboard
    exit();
}

require_once 'classes/account.class.php';

$error = '';

if (isset($_POST['login'])) {
    $user = new Account();
    $user->email = htmlentities($_POST['email']);
    $user->password = htmlentities($_POST['password']);
    
    if ($user->sign_in_customer()) {
        $_SESSION['user'] = 'student';
        $_SESSION['logged_in'] = true;
        $_SESSION['creation_id'] = $user->getUserCreationId();
        $_SESSION['login_success'] = "You've successfully logged in, welcome back!";
        
        // Redirect with query parameter
        header('Location: ../user/AcademAI-Quiz-Room.php?success=1');
        exit();
    } else {
        $error = "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php
    $title = 'AcademAI | Login';
    require_once('./include/academAI-extension-links-II.php');
?>
<link rel="stylesheet" href="./css/academAI-signup-login.css">
<body class="login-page">
<?php
    require_once './include/academAI-nav-bar-user.php';
?>
<main>
    <section class="login-section">
        <div class="slide-login slide2">
            <video autoplay muted loop class="bg-video">
                <source src="../img/login-2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="row row-signup">
            <div class="col-12 col-md-6 col-lg-5">      
                <div class="login-left p-5">
                    <h1 class="h2 brand-color text-center mb-3">LOG IN</h1>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input placeholder="Email" type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                        </div>
                        <div class="mb-3">
                            <input placeholder="Password" type="password" class="form-control" id="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="login" class="btn-log-in">Log In</button>
                        </div>
                        <?php if(isset($_POST['login']) && $error): ?>
                            <p class="text-danger text-center"><?= $error ?></p>
                        <?php endif; ?>
                        <div class="text-center mt-3">
                            <p class="dont-have-account">Don't have an account? <a href="signup.php" class="brand-color-sign-in-here">Sign in here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Success Modal -->
<div class="modal fade" id="login-success-modal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginSuccessModalLabel">Login Successful</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if (isset($_SESSION['login_success'])) {
            echo $_SESSION['login_success'];
            unset($_SESSION['login_success']); // Clear the success message
        } ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>

</body>
</html>
