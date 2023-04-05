<?php
require_once "db.php";

if (isset($_SESSION['user_id']) != "") {
    header("Location: dashboard.php");
}

if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['rname']);
    $email = mysqli_real_escape_string($conn, $_POST['remail']);
    $mobile = mysqli_real_escape_string($conn, $_POST['rphone']);
    $password = mysqli_real_escape_string($conn, $_POST['rpass']);

    if (!$error) {
        if (
            mysqli_query($conn, "INSERT INTO users(name, email, mobile, password)
            VALUES('" . $name . "', '"
                . $email . "', '" . $mobile . "', '" . md5($password) . "')")
        ) {
            header("location: register.php");
            exit();
        } else {
            echo "Error: " . $sql . "" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>