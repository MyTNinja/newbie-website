<?php
session_start();

require_once "db.php";

if (isset($_SESSION['user_id']) != "") {
    header("Location: dashboard.php");
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['lemail']);
    $password = mysqli_real_escape_string($conn, $_POST['lpass']);

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "'
    and password = '" . md5($password) . "'");

    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $_SESSION['user_id'] = $row['uid'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_mobile'] = $row['mobile'];
            header("Location: dashboard.php");
        }
    } else {
        echo '<script>alert("Incorrect Email or Password!!!")</script>';
    }
}
?>