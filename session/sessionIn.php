<?php
session_start();
if (!isset($_SESSION['user_form'])) {
    echo "<script>alert('Login completed')</script>";
    header('location: ../helper/error.php');
    exit();
}
?>
