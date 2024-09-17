<?php
    require_once('../include/extension_links.php');
?>


<?php
  require_once '../include/academAI-sidebar.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-activity-not-taken-card.css">
    <script src="script.js" defer></script>
    <title>card</title>
</head>
<body>

<div class="mcq-container">
  <div class="mcq-container-2">
<div class="search-container">
<div class="icon-search"><i class="fas fa-search"></i></div>
        <input type="text" id="searchInput" placeholder="Search...">
        <div class="search-btn-container"><button type="button" id="searchButton">Search</button></div>
        <div class="filter-container">
        <div class="dropdown">
        <div class="dropdown-month"><button class="filter-button" id="rankFilter">Month<i class="fa-solid fa-filter"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">January</a>
                    <a href="#">February</a>
                    <a href="#">March</a>
                    <a href="#">April</a>
                    <a href="#">May</a>
                    <a href="#">June</a>
                    <a href="#">July</a>
                    <a href="#">August</a>
                    <a href="#">September</a>
                    <a href="#">October</a>
                    <a href="#">November</a>
                    <a href="#">December</a>
                </div>
            </div>
            </div>
            <div class="dropdown">
             <div class="dropdown-year"><button class="filter-button" id="orderFilter">Yearly<i class="fa-solid fa-filter"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">2021</a>
                    <a href="#">2022</a>
                    <a href="#">2023</a>
                    <a href="#">2024</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-con">
    <div class="label-for-card-page-activity">
    <h1>NOT TAKEN</h1>
    </div>
    <div class="card" id="not-taken-modalBtn">
        <img src="../img/cards/1.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
        <i class="fa-solid fa-right-from-bracket" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Literary Legends</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Literature</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="AcademAI-Not-Taken-People-Join.php" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: Jan 07, 2024</p>
                <p class="card-description">Start Time: 1:00 PM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: Jan 07, 2024</p>
                <p class="card-description">End Time: 2:00 PM</p>
            </div>
        </div>
    </div>
</div>

    <div class="card">
        <img src="../img/cards/7.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
        <i class="fa-solid fa-right-from-bracket" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Artistic Anatomy</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Arts</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="#" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: Jan 10, 2024</p>
                <p class="card-description">Start Time: 3:00 PM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: Jan 11, 2024</p>
                <p class="card-description">End Time: 9:00 AM</p>
            </div>
        </div>
    </div>
</div>
    <div class="card">
        <img src="../img/cards/5.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
        <i class="fa-solid fa-right-from-bracket" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Political Punditry</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Politics/Government</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="#" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: Jan 15, 2024</p>
                <p class="card-description">Start Time: 8:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: Jan 15, 2024</p>
                <p class="card-description">End Time: 90:00 AM</p>
            </div>
        </div>
    </div>
    </div>
   
</div>
    
    

<div id="not-taken-card-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="half-image">
            <img src="../img/modal/modal-14.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-q4.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
        
        </form>
        <div class="submit-content">
            <p class="submit-text">Sorry.This quiz had already been ended on</p> <!-- Text -->
            <p class="submit-text">January 7,2024 </p> <!-- Text -->
        </div>
    </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="leave--modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="half-image">
            <img src="../img/modal/modal-15.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
      
        <form action="#">
            <!-- Your form elements go here -->
        </form>
        <div class="submit-content">
            <p class="submit-text">Do you want to leave this quiz room?</p> <!-- Text -->
            <a href="AcademAI-Activity-Not-Taken-Card.php" class="cancel-btn-exit">No</a> <!-- Cancel Button -->
            <a href="AcademAI-Activity-Not-Taken-Card.phpp" class="yes-btn-exit">Yes</a> <!-- Yes Button -->
        </div>
    </div>
  </div>
</div>

    

</div>
  </div>


<script>// script.js
    document.addEventListener("DOMContentLoaded", function() {
        const monthlyFilter = document.getElementById("monthlyFilter");
        const yearlyFilter = document.getElementById("yearlyFilter");
    
        monthlyFilter.addEventListener("click", function() {
            monthlyFilter.classList.add("active");
            yearlyFilter.classList.remove("active");
            // Add logic to filter monthly
        });
    
        yearlyFilter.addEventListener("click", function() {
            yearlyFilter.classList.add("active");
            monthlyFilter.classList.remove("active");
            // Add logic to filter yearly
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    const searchContainer = document.querySelector(".search-container");
    const cardContainer = document.querySelector(".container.card-con");
    let lastScrollTop = 0;

    cardContainer.addEventListener("scroll", function() {
        let scrollTop = cardContainer.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Downscroll code
            searchContainer.style.opacity = "0"; // Hide the search container
        } else {
            // Upscroll code
            searchContainer.style.opacity = "1"; // Show the search container
        }
        lastScrollTop = scrollTop;
    });
});

    </script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("not-taken-card-modal");
    const modalBtn = document.getElementById("not-taken-modalBtn");
    const closeModalBtn = document.querySelector(".close");
    const joinLinks = document.querySelectorAll(".people-link");
    const closeIcon = document.querySelector(".fa-right-from-bracket"); // Select the close icon

    // Function to open modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Event listener for modal open button
    modalBtn.onclick = openModal;

    // Event listener for modal close button
    closeModalBtn.onclick = closeModal;

    // Event listener for clicks outside modal to close it
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Event listener for each "People who join" link
    joinLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent event from bubbling up
        });
    });

    // Event listener for close icon
    closeIcon.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent event from bubbling up
    });
});
</script>
    

</body>
</html>
