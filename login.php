<?php
    session_start();
    include "main.php";
    $log=new Main;
    if(isset($_SESSION['user'])){
        header('Location:insert.php');
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <div class="login-box">
            <img src="img/user.png" class="user">
            <h2>Log In Here</h2>
            <form method="post" action="auth.php">
                <p>Email:</p>
                <input type="text" name="username" placeholder="Enter Email">
                <p>Password:</p>
                <input type="password" name="password" placeholder="******">
                <input type="submit" name="submit"  value="Sign In">
                <a href="#">Forget Password</a>
            </form>
        </div>
    </body>
</html>