<?php
session_start();
require_once "database.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$sql = "SELECT email FROM users WHERE email ='" . $email . "'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
if ($result) {
    echo "<script>alert('email is used!')</script>";
    header("Refresh:0 , url = registerForm.php");
    exit();
}else{
if ($_POST['email'] != null && $_POST['password'] != null && $_POST['name'] != null && $_POST['cfpassword'] != null && $_POST['cfpassword'] == $_POST['password']) {
    $sql = "INSERT INTO users (name,email,password,dob,gender) VALUES ('" . trim($_POST['name']) . "','" . trim($_POST['email']) . "','" . trim(md5($_POST['password'])) . "','" . trim($_POST['dob']) . "','" . trim($_POST['gender']) . "')";
    if ($conn->query($sql)) {
        echo "<script>alert('Registration is complete.')</script>";
        header("Refresh:0 , url = index.html");
        exit();
    } else {
        echo "<script>alert('Registration isn't complete.')</script>";
        header("Refresh:0 , url = registerForm.php");
        exit();
    }
} else {
    echo "<script>alert('Please check the entered details.')</script>";
    header("Refresh:0 , url = registerForm.php");
    exit();
}
    mysqli_close($conn);
}
