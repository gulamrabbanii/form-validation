<?php
session_start();
require_once "database.php";
if ($_SESSION['email'] == null) {
    echo "<script>alert('Please login.');</script>";
    header("Refresh:0 , url=index.html");
}
?>
  <h2>Welcome</h2>