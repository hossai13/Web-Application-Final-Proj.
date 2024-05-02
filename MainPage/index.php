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
                <div class="slides">
                    <img src="../images/money.jpg" class="money" alt="Money IMG">
                </div>
                <div class="slides">
                    <img src="../images/Calendar.png" alt="Calendar IMG">
                </div>
                <div class="slides">
                    <img src="../images/SALARYCALC.png" alt="Salary Calculator IMG">
                </div>
                <div class="slides">
                    <img src="../images/LoanCalc.png" alt="Loan Calculator IMG">
                </div>
                <div class="slides">
                    <img src="../images/BudgetCalc.png" alt="Budget Calculator IMG">
                </div>
                <div class="slides">
                    <img src="../images/GoalTracker.png" alt="Goal Tracker IMG">
                </div>
            </div>

            <div class="about-us-section">
                <h2 class="about-US">
                    ABOUT US
                </h2>
                <div class="description">
                    <p>
                        FUNI, short for Finance University, stands as a beacon
                        for young adults seeking to master their financial
                        landscapes with confidence and ease. At Financial
                        University, our core mission revolves around fostering
                        consistency and mindfulness in the management of
                        expenses, loans, and budgets. Through a suite of
                        intuitive tools, including a dynamic calendar with
                        reminders, budget calculator, loan calculator, salary
                        calculator, and goal tracker, we offer a holistic
                        platform designed to empower individuals in their
                        financial journeys.
                    </p>
                    <p>
                        Whether you're navigating the complexities of student
                        loans, saving diligently for a dream vacation, or
                        diligently planning for the future, FUNI provides the
                        essential resources and unwavering support needed to
                        make informed decisions and achieve your financial
                        aspirations. Embark on your path towards financial
                        freedom and stability with FUNI—where every step is
                        guided by knowledge, empowerment, and a commitment to
                        your success.
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
                var slides = document.getElementsByClassName("slides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slide_index++;
                if (slide_index > slides.length) {
                    slide_index = 1;
                }
                slides[slide_index - 1].style.display = "block";
                setTimeout(showSlides, 3750);
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