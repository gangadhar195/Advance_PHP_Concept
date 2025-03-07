<?php
session_start();

$n = $_SESSION['user'];

echo"Welcome to ".$n."<br>";

if(!$_SESSION['user']){
    header("location:session_login.php");
}
?>
<a href="logout.php">Logout</a>