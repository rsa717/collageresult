<?php
    session_start();
    include "main.php";
    $log=new Main;
    if(!$_SESSION['user']){
        header('Location:login.php');
    }
    echo "Hello world";
?>
<a href="logout.php?logout=true">Logout</a>