<?php session_start();
    unset($_SESSION['userData']);
    header('Location:login.php');exit;
?>
