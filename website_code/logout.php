<?php
session_start();
unset($_SESSION['user']['U_name']);
unset($_SESSION['user']['U_email']);
header("Location: sign_in.php");
?>