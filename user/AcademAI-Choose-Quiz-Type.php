<?php
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

// Clear the quiz types session if navigating back to this page
if (isset($_SESSION['quizTypes'])) {
    unset($_SESSION['quizTypes']);
    unset($_SESSION['currentQuizTypeIndex']);
}

require_once('../include/extension_links.php');
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Clear all localStorage data upon loading this page
        localStorage.clear();
        console.log('LocalStorage cleared!');
    });
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-choose-quiz-type.css">
    <title>Choose Quiz Type</title>
</head>
<body>

<?php require_once '../include/academAI-sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-choose-quiz-type.css">
    <title>Choose Quiz Type</title>
</head>
<body>

<?php require_once '../include/academAI-sidebar.php'; ?>

<div class="container-fluid con-fluid">
    <div class="video-container">
        <div class="create-quiz-room-overlay"></div>
        <div class="like-container container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-5 mb-2">
                    <h2 class="text-center text-black what-would-you-like">What would you like to create?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 my-4 mx-5 choose-quiz">
                    <div class="row">
                        <div class="col-md-3 px-1">
                            <div class="card quiz-option" data-type="essay">
                                <img src="../img/essay-unscreen.gif" class="card-img" alt="Essay">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Essay</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card quiz-option" data-type="mcq">
                                <img src="../img/multiple-choice.gif" class="card-img" alt="Multiple Choice">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Multiple Choice</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="card quiz-option" data-type="short-answer">
                                <img src="../img/identification.gif" class="card-img" alt="Short Answer">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Short Answer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container">
                    <button id="proceed-button" class="btn-arrow" disabled> &#8594; <!-- Right arrow symbol --></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   let selectedTypes = []; // Store selected quiz types in an array

document.querySelectorAll('.quiz-option').forEach(card => {
    card.addEventListener('click', () => {
        const type = card.getAttribute('data-type');
        
        if (selectedTypes.includes(type)) {
            // If already selected, remove from the array
            selectedTypes = selectedTypes.filter(t => t !== type);
            card.classList.remove('selected');
        } else {
            // Add to the array
            selectedTypes.push(type);
            card.classList.add('selected');
        }

        document.getElementById('proceed-button').disabled = selectedTypes.length === 0;
    });
});

document.getElementById('proceed-button').addEventListener('click', () => {
    if (selectedTypes.length > 0) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '../tools/create-quiz-2nd.php'; 

        // Add selected quiz types to the form
        selectedTypes.forEach(type => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'quizTypes[]';
            input.value = type;
            form.appendChild(input);
        });

        document.body.appendChild(form);
        form.submit();
    }
});


        
</script>

</body>
</html>
