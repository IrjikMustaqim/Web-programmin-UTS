<?php
    session_start();
    if(isset($_COOKIE['username'])){
        if(isset($_POST["start"])){
            $_SESSION['gamestart'] = $_POST["start"];
            $_SESSION['score'] = 0;
            $_SESSION['live'] = 5;
        }
        header('Location:game.php');        
    }else{
        header('Location:login.php');
    }
?>