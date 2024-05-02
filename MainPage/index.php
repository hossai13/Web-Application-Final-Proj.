<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <nav>
            <a href="../HomePage/index.php" id="FUNI-logo">
                <h1>FUNI</h1><img src="../images/IMG_0049.jpg" alt="FUNI logo">
            </a>
            <ul>
                <li><a href="../Calendar/index.php">CALENDAR</a></li>
                <li><a href="../GoalTracker/index.php">GOAL TRACKER</a></li>
                <li class="dropdown">CALCULATORS
                    <div class="dropdown-content">
                        <a href="../Billing/index.php">BUDGET
                            CALCULATOR</a>
                        <a href="../Salary Calc/index.php">SALARY
                            CALCULATOR</a>
                        <a href="../Loan Calc/index.php">LOAN
                            CALCULATOR</a>
                    </div>
                </li>
                <li class="dropdown"><?php echo $_SESSION['user_name']; ?>
                    <div class="dropdown-content">
                        <a href="#">EDIT PROFILE</a>
                        <a href="#">OPTIONS</a>
                        <a href="../Logout/logout.php" id="signOut">LOGOUT</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="home-page">
            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="../images/money.jpg" alt="Slide 1">
                </div>
                <div class="mySlides">
                    <img src="../images/pattern.jpg" alt="Slide 2">
                </div>
                <div class="mySlides">
                    <img src="../images/" alt="Slide 1">
                </div>
            </div>

            <div class="about-us-section">
                <h2>
                    ABOUT US
                </h2>
                <div class="description">
                    <p>
                        What is FUNI? FUNI is an abbreviation for Finance University. Welcome to Financial University, where we empower young adults to take control of their finances with ease and confidence. Our mission is to instill consistency and mindfulness in managing expenses, loans, and budgets. With our intuitive tools, including a dynamic calendar with reminders, budget calculator, loan calculator, salary calculator, and goal tracker, we provide a comprehensive platform to help you stay on track financially. Whether you're navigating student loans, saving for a dream vacation, or planning for the future, our website equips you with the resources and support you need to make informed decisions and achieve your financial goals. Your journey towards financial freedom and stability begins with FUNI.
                    </p>
                </div>
            </div>
        </div>

        <script>
            var slide_index = 0;
            showSlides();

            function plusSlides(n) {
                showSlides(slide_index += n);
            }

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slide_index++;
                if (slide_index > slides.length) {
                    slide_index = 1;
                }
                slides[slide_index - 1].style.display = "block";
                setTimeout(showSlides, 4750);
            }
        </script>

    </body>

    </html>
<?php
} else {
    header("Location: ../Login/index.php");
    exit();
}
?>