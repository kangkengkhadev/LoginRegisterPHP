<?php
session_start();
$username = $_POST['username'];
$password = ($_POST['password']);
$conpass = ($_POST['conpass']);
$email = $_POST['email'];

if (empty($email)) {
    header('location: register.php');
    $_SESSION['error'] = 'empty email';
} else if (empty($username)) {
    header('location: register.php');
    $_SESSION['error'] = 'empty username';
} else if (empty($password)) {
    header('location: register.php');
    $_SESSION['error'] = 'empty password';
} else if (empty($conpass)) {
    header('location: register.php');
    $_SESSION['error'] = 'empty confirm password';
} else if (strlen($password) < 8) {
    header('location: register.php');
    $_SESSION['error'] = 'password is too short';
} else if ($conpass != $password) {
    $_SESSION['error'] = 'password does not match';
    header('location: register.php');
}
$password = md5($_POST['password']);
$connect = mysqli_connect("localhost", "root", "");
$sql = 'use memberlist';
$result = mysqli_query($connect, $sql);
$sql = "SELECT * FROM member WHERE username = '$username'  ";
$result = mysqli_query($connect, $sql);
$usercheck =  mysqli_fetch_assoc($result);
if($usercheck) {
    $_SESSION['error'] = 'username is already used';
    header('location: register.php');
}
mysqli_query($connect, "INSERT INTO member ( username, password, email)
VALUES (  '$username', '$password', '$email')");
 $_SESSION['error'] = 'success';
 $_SESSION['username'] = $username;
header('location: page.php');
