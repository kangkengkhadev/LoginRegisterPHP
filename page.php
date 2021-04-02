<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
echo "<h1> wellcome ".$_SESSION['username']."</h1>";
?>
<a href="page.php?logout= logout ">logout</a>