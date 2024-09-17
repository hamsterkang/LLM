<?php
require_once 'classes/user.class.php';
require_once 'tools/functions.php';

$accountCreated = false;
$duplicateEmailError = false;
$passwordMismatchError = false;

if (isset($_POST['save'])) {
    $student = new Academai();
    // sanitize
    $student->first_name = htmlentities($_POST['first_name']);
    $student->middle_name = htmlentities($_POST['middle_name']);
    $student->last_name = htmlentities($_POST['last_name']);
    $student->email = htmlentities($_POST['email']);
    $student->password = htmlentities($_POST['password']);
    $confirmPassword = htmlentities($_POST['confirmpassword']);

    // validate inputs of the users
    if (validate_field($student->first_name) && 
        validate_field($student->middle_name) &&
        validate_field($student->last_name) &&
        validate_field($student->email) &&
        validate_field($student->password) &&
        validate_password($student->password) &&
        $student->password === $confirmPassword) {

        try {
            // proceed with saving
            if ($student->add()) {
                $accountCreated = true;
            }
        } catch (PDOException $e) {
            // Check if the exception is due to a duplicate email entry
            if ($e->getCode() == 23000) { // SQLSTATE[23000] is for integrity constraint violations
                $duplicateEmailError = true;
            } else {
                // Handle other types of exceptions if needed
                echo 'Something went wrong: ' . $e->getMessage();
            }
        }
    } else {
        if ($student->password !== $confirmPassword) {
            $passwordMismatchError = true;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <?php    
        $title = 'AcademAI | Sign Up';
        require_once('./include/academAI-extension-links-II.php');
    ?>
    <link rel="stylesheet" href="./css/academAI-signup-login.css">
<body class="signup-page" >
    <?php
        require_once('./include/academAI-nav-bar-user.php');
    ?>
    <main>
        <section class="signup-section">
            <div class="slide slide1">
                        <video autoplay muted loop class="bg-video">
                            <source src="../img/signup-8.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
</div>
                <div class="row row-signup">
                    <div class="col">      
                        <div class="signup-left p-5">
                            <h1 class="h2 brand-color text-center mb-3">SIGN UP</h1>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <input placeholder="First Name" type="text" class="form-control" id="first_name" name="first_name" value="<?php if(isset($_POST['first_name'])){ echo $_POST['first_name']; } ?>">
                                    <?php
                                        if(isset($_POST['first_name']) && !validate_field($_POST['first_name'])){
                                    ?>
                                            <p class="text-danger my-1">Please enter a valid first name</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Middle Name" type="text" class="form-control" id="middle_name" name="middle_name" value="<?php if(isset($_POST['middle_name'])){ echo $_POST['middle_name']; } ?>">
                                    <?php
                                        if(isset($_POST['middle_name']) && !validate_field($_POST['middle_name'])){
                                    ?>
                                            <p class="text-danger my-1">Please enter a valid middle name</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Last Name" type="text" class="form-control" id="last_name" name="last_name" value="<?php if(isset($_POST['last_name'])){ echo $_POST['last_name']; } ?>">
                                    <?php
                                        if(isset($_POST['last_name']) && !validate_field($_POST['last_name'])){
                                    ?>
                                            <p class="text-danger my-1">Please enter a valid last name</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Email" type="email" class="form-control" id="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>">
                                    <?php
                                        if(isset($_POST['email']) && !validate_field($_POST['email'])){
                                    ?>
                                            <p class="text-danger my-1">Please enter a valid email</p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input placeholder="Password" type="password" class="form-control" id="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
                                    <?php
                                        if(isset($_POST['password']) && validate_password($_POST['password']) !== "success"){
                                    ?>
                                            <p class="text-danger my-1"><?= validate_password($_POST['password']) ?></p>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="mb-3">
                            <input placeholder="Confirm Password" type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php if(isset($_POST['confirmpassword'])){ echo $_POST['confirmpassword']; } ?>">
                            <?php
                                if (isset($_POST['password']) && isset($_POST['confirmpassword']) && $passwordMismatchError) {
                            ?>
                                <p class="text-danger text-danger my-1">Your confirm password didn't match</p>
                            <?php
                                }
                            ?>
</div>

                                <div class="mb-3">
                                    <button type="submit" name="save" class="btn-create-account">Create account</button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <p class="already-have-account">Already have an account? <a href="login.php" class="brand-color-log-in">Log in here</a></p>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>

 <!-- Success Modal -->
 <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-sucessfully-created">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-sucessful-modal">
                    Your account has been successfully created! You can now log in.
                </div>
                <div class="modal-footer modal-footer-sucessfully-created">
                    <a href="login.php" class=" btn-go-to-login">Go to Login</a>
                </div>
            </div>
        </div>
    </div>

       <!-- Duplicate Email Error Modal -->
       <div class="modal fade" id="duplicateEmailModal" tabindex="-1" aria-labelledby="duplicateEmailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-duplicate-email">
                <div class="modal-header">
                </div>
                <div class="modal-body modal-body-duplicate-email">
                    The email you entered is already in use. Please try another one.
                </div>
                <div class="modal-footer">
                    <button type="button" class="OK-btn-error-email" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>


    <!-- JavaScript to trigger modals -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        <?php if ($accountCreated) { ?>
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        <?php } elseif ($duplicateEmailError) { ?>
            var duplicateEmailModal = new bootstrap.Modal(document.getElementById('duplicateEmailModal'));
            duplicateEmailModal.show();
        <?php } ?>
    </script>
</body>
</html>