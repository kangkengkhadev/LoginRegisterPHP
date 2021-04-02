<?php
       session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="loginback.php" method="POST">
    
    <h1>login</h1>
    <?php
    
         if(isset($_SESSION['error'])){
             echo $_SESSION['error']."<br>";
             session_destroy();
         }
    ?>
    <label for="username">username</label><br>
    <input type="text" placeholder="username" name="username"><br>
    <label for="password">password</label><br>
    <input type="password" placeholder="password" name="password"><br>
    <input type="submit">
    <a href="register.php">register?</a>
    </form>
</body>
</html>