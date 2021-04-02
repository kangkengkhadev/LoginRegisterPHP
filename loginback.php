<?php
session_start();
$username = $_POST['username'];
$password = ($_POST['password']);
if (empty($password)) {
    header('location: login.php');
    $_SESSION['error'] = 'empty password';
} 
else if (empty($username)) {
    header('location: login.php');
    $_SESSION['error'] = 'empty username';
}
$password = md5($_POST['password']);
$connect = mysqli_connect("localhost", "root", "");
$sql = 'use memberlist';
$result = mysqli_query($connect, $sql);
$sql = "SELECT * FROM member WHERE username = '$username'  ";
$result = mysqli_query($connect, $sql);
$usercheck =  mysqli_fetch_assoc($result);
if($usercheck){
    if($usercheck['password'] === $password){
        header('location: page.php');
        $_SESSION['username'] = $username;
    }
    else{
        header('location: login.php');
        $_SESSION['error'] = 'password wrong';
    }
}
else {
    header('location: login.php');
    $_SESSION['error'] = 'dont have username plese register';
}
