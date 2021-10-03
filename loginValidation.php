<?php
if (trim($_POST['email']) == null || trim($_POST['password']) == null) {
    echo "<script>alert('Please fill in information.')</script>";
    header("Refresh:0 , url =  index.html");
    exit();
} else {
    require_once "database.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    echo $email;
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    echo $password;
    $sql = "SELECT email,password FROM users WHERE email ='" . $email . "' and password = '" . $password . "'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
    if (!$result) {
        echo "<script>alert('Email or Password , Invalid.')</script>";
        header("Refresh:0 , url = logout.php");
        exit();
    } else {
        session_start();
        $_SESSION['email'] = $result['email'];
        header("Location: homepage.php");
        session_write_close();
    }
}
mysqli_close($conn);
