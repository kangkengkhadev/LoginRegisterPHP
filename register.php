<?php
     session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
<form action="registerback.php" method="POST">
    <h1>login</h1>
    <?php
         if(isset($_SESSION['error'])){
             echo $_SESSION['error']."<br>";
             session_destroy();
         }
    ?>
    <label for="email">email</label><br>
    <input type="email" placeholder="email" name="email"><br>
    <label for="username">username</label><br>
    <input type="text" placeholder="username" name="username"><br>
    <label for="password">password</label><br>
    <input type="password" placeholder="password" name="password"><br>
    <label for="password">confirmpassword</label><br>
    <input type="password" placeholder="password" name="conpass"><br>
    <input type="submit">
    <a href="login.php">login?</a>
    </form>
</body>
</html>