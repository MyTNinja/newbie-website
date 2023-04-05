<?php

session_start();

if (isset($_SESSION['user_id']) == "") {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dashboard Panel</title>

    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
                {
                    title: {
                        text: "Division of Income"
                    },
                    data: [
                        {
                            type: "doughnut",
                            dataPoints: [
                                { y: 36.525, indexLabel: "Savings 36.5%" },
                                { y: 63.475, indexLabel: "Expenses 63.4%" },
                            ]
                        }
                    ]
                });

            chart.render();
        }
    </script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="img/logo.jpeg" alt="">
            </div>

            <span class="logo_name">
                <?php echo $_SESSION['user_name'] ?>
            </span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-money-bill-stack"></i>
                        <span class="link-name">Income</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-money-withdraw"></i>
                        <span class="link-name">Savings</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-money-insert"></i>
                        <span class="link-name">Expenses</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-wallet"></i>
                        <span class="link-name">Budget</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Investment</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="logout.php">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a></li>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="container" style="margin: 20px auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Name :
                        <?php echo $_SESSION['user_name'] ?>
                    </h3>
                    <h3 class="card-text">Email :
                        <?php echo $_SESSION['user_email'] ?>
                    </h3>
                    <h3 class="card-text">Mobile :
                        <?php echo $_SESSION['user_mobile'] ?>
                    </h3>
                </div>
            </div>
        </div>

        <div id="chartContainer" style="height: 300px; width: 30%; margin: 5% auto">
        </div>
    </section>
</body>

</html>