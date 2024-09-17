<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="../css/academAI-student-leaderboard.css">
</head>
<body>



    <div class="search-container">
    <div class="icon-search"><i class="fas fa-search"></i></div>
        <input type="text" id="searchInput" placeholder="Type here...">
        <div class="search-btn-container"><button type="button" id="searchButton">Search</button></div>
        <div class="filter-container">
            <div class="dropdown">
                <div class="dropdown-rank"><button class="filter-button" id="rankFilter">Rank<i class="fa-solid fa-arrow-down-wide-short"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">Highest to Lowest</a>
                    <a href="#">Lowest to Highest</a>
                </div>
            </div>
            <div class="dropdown">
            <div class="dropdown-order"><button class="filter-button" id="orderFilter">Order<i class="fa-solid fa-arrow-down-wide-short"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">Ascending</a>
                    <a href="#">Descending</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="leaderboard-title">Leaderboard</div>
<div class="download">
        <button id="downloadPdfButton">Download as PDF</button>
        <button id="downloadExcelButton">Download as Excel</button>
    </div>  
        <div class="table-responsive leaderboard-table">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th onclick="sortColumn('number')">Number</th>
                        <th onclick="sortColumn('rank')">Rank</th>
                        <th onclick="sortColumn('email')">Email</th>
                        <th onclick="sortColumn('name')">Name</th>
                        <th onclick="sortColumn('score')">Score</th>
                       
                    </tr>
                </thead>
                <tbody>
                <tr class="clickable-row" onclick="window.location.href='AcademAI-user(learners)-view-quiz-answer-1.php'">
                        <td>1</td>
                        <td>1st</td>
                        <td>sai75@gmail.com</td>
                        <td>Sairyl W. Lubguban</td>
                        <td>100</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>2nd</td>
                        <td>kat123@gmail.com</td>
                        <td>Kathleen I. Santiago</td>
                        <td>80</td>
                       
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>3rd</td>
                        <td>barbie@gmail.com</td>
                        <td>Aimee F. Roswell</td>
                        <td>75</td>
                       
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>4th</td>
                        <td>taguro@gmail.com</td>
                        <td>Maxpein D. Del Valle</td>
                        <td>70</td>
                      
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>5th</td>
                        <td>blackwidow1@gmail.com</td>
                        <td>Scarlett D. Johansson</td>
                        <td>60</td>
                       
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6th</td>
                        <td>pillow34@gmail.com</td>
                        <td>Selena Gomez</td>
                        <td>55</td>
                       
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- JavaScript for sorting -->
    <script>
        function sortColumn(columnName) {
            // Implement sorting logic here
            alert('Sorting by ' + columnName);
        }

        document.getElementById("downloadPdfButton").addEventListener("click", function() {
    // Get the table element
    const table = document.getElementById("leaderboard-table");
    // Create a new jsPDF instance
    const pdf = new jsPDF();
    // Convert the table to a PDF
    pdf.autoTable({ html: table });
    // Save the PDF
    pdf.save("leaderboard.pdf");
});

document.getElementById("downloadExcelButton").addEventListener("click", function() {
    // Get the table element
    const table = document.getElementById("leaderboard-table");
    // Convert the table to a workbook
    const wb = XLSX.utils.table_to_book(table);
    // Save the workbook as an Excel file
    XLSX.writeFile(wb, "leaderboard.xlsx");
});
    </script>
</body>
</html>
