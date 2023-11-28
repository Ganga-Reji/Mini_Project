<?php
session_start();
$conn = mysqli_connect('localhost','root','','gruda_db');
// Check if the user is logged in (if the session variable is set)
if ($_SESSION['type'] != 'user') {
    header("Location: ../login.php");
    exit();
}
?>