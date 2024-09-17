<?php include __DIR__ . '/../include/info.php'; // Ensure the path to info.php is correct ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/navigation_bar.css">
   
</head>

<div class="dropdown-wrapper">
    <div class="academAI-sidebar-container ">
        <div class="navigation">
            <ul>
                <li class="navigation-user-logo-section">
                    <a href="#">
                        <img src="../img/light-logo-img.png" alt="logo" id="academAI-logo">
                        <img src="../img/light-logo-txt.png" alt="logo" id="academAIsidebar-logo-title">
                      
                    </a>
                </li>
                <li class="navigation-lists">
                        <a href="../user/AcademAI-Quiz-Room.php">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Quiz Room</span>
                        </a>
                    </li>

                    <div class="dropdown dropdown-sidebar">
                        <span class="icon">
                            <i class="fa-solid fa-pen"></i>
                        </span>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="activityDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="title-activity">Activity</span>
                        </button>
                      
                        <ul class="activity-dropdown dropdown-menu" aria-labelledby="activityDropdown">
                            <li><a class="dropdown-item" href="../user/AcademAI-Activity-Upcoming-Card.php">Upcoming</a></li>
                            <li><a class="dropdown-item" href="../user/AcademAI-Activity-Running-Card.php">On-going</a></li>
                            <li><a class="dropdown-item" href="../user/AcademAI-Activity-Completed-Card.php">Completed</a></li>
                            <li><a class="dropdown-item" href="../user/AcademAI-Activity-Not-Taken-Card.php">Not Taken</a></li>
                        </ul>
                    </div>

                    <div class="dropdown dropdown-sidebar">
                        <span class="icon">
                            <i class="fa-solid fa-folder-open"></i>
                        </span>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="libraryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="title-library">Library</span>
                        </button>
                      
                        <ul class="library-dropdown dropdown-menu" aria-labelledby="library-dropdown">
                            <li><a class="dropdown-item" href="../user/AcademAI-Library-Upcoming-Card.php">Upcoming</a></li>
                            <li><a class="dropdown-item" href="../user/AcademAI-Library-Running-Card.php">On-going</a></li>
                            <li><a class="dropdown-item" href="../user/AcademAI-Library-Completed-Card.php">Completed</a></li>
                        </ul>
                    </div>
                    

                 

                <li class="navigation-lists">
                    <a href="../user/AcademAI-Essay-Viewing-Rubric-Setting.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Essay Rubric Setting</span>
                    </a>
                </li>



                <li class="navigation-lists">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutConfirmModal">
                        <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>


            </ul>

    
            <li class="profile">
                    <div class="profile_details">
                        <img src="../img/profile.png" alt="profile image">
                        <div class="profile_content">
                        <div class="name"><?php echo strtoupper($first_name . ' ' . $middle_name . ' ' . $last_name); ?></div>

                        </div>
                    </div>
                 

                </li>
        </div>

<!-- Logout Confirmation Modal -->
<div class="modal fade" id="logoutConfirmModal" tabindex="-1" aria-labelledby="logoutConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-logout">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer modal-footer-logout">
                <button type="button" class="cancel-btn-logout" data-bs-dismiss="modal">Cancel</button>
                <!-- The logout action should be triggered by this button --><a href="../user.logout.php" id="logoutConfirmButton">Logout</a>

            </div>
        </div>
    </div>
</div>


<!-- Logout Success Modal -->
<div class="modal fade" id="logoutSuccessModal" tabindex="-1" aria-labelledby="logoutSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutSuccessModalLabel">Logout Successful</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You have successfully logged out. Thank you!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


        <div class="main ">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/navigation_bar.js"></script>



</html>
