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
    <link rel="stylesheet" href="../css/academAI-activity-upcoming-card.css">
    <script src="script.js" defer></script>
    <title>card</title>
</head>
<body>

<div class="mcq-container">
  <div class="mcq-container-2">
  
  <div class="search-container">
         <div class="icon-search"><i class="fas fa-search"></i></div>
        <input type="text" id="searchInput" placeholder="Type here...">
        <div class="search-btn-container"><button type="button" id="searchButton">Search</button></div>
        <div class="filter-container">
            <div class="dropdown ">
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

    <div class="label-for-card-page-library">
    <h1>UPCOMING</h1>
    </div>


    <div class="card" id="upcoming-card-modalBtn">
        <a href="AcademAI-Library-Upcoming-View-Card.php"><img src="../img/cards/5.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
            <i class="fas fa-times close-icon" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">DNA</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Chemistry</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="AcademAI-Library-Upcoming-People-Join.php" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: March 25, 2024</p>
                <p class="card-description">Start Time: 10:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: March 27, 2024</p>
                <p class="card-description">End Time: 12:00 PM</p>
            </div>
        </div>
        </div>
</a>
    </div>

    <div class="card">
        <img src="../img/cards/2.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
            <i class="fas fa-times close-icon"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Ozone Layer</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Science</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="#" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: March 27, 2024</p>
                <p class="card-description">Start Time: 9:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: March 29, 2024</p>
                <p class="card-description">End Time: 11:59 AM</p>
            </div>
        </div>
    </div>
    </div>

    <div class="card">
        <img src="../img/cards/1.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
            <i class="fas fa-times close-icon"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Math is life</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Calculus</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="#" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: March 31, 2024</p>
                <p class="card-description">Start Time: 11:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: March 31, 2024</p>
                <p class="card-description">End Time: 1:00 PM</p>
            </div>
        </div>
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
            <p class="submit-text">Are you sure you want to delete this quiz room?</p> <!-- Text -->
            <a href="AcademAI-Library-Upcoming-Card.php" class="cancel-btn">No</a> <!-- Cancel Button -->
            <a href="AcademAI-Library-Upcoming-Card.php" class="yes-btn">Yes</a> <!-- Yes Button -->
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



    
</body><script>
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("leave--modal");
    const closeIcons = document.querySelectorAll(".close-icon");

    // Function to open modal
    function openModal() {
        modal.style.display = "block";
    }

    // Event listener for close icons
    closeIcons.forEach(function(icon) {
        icon.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default behavior (link navigation)
            openModal(); // Open the modal when the close icon is clicked
        });
    });
});
</script>

</html>
