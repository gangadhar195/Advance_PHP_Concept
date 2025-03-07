<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header("location:session_login.php");
?>