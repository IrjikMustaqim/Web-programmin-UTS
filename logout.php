<?php
    if(!isset($_COOKIE['username'])){
        header("Location:login.php");
    }else{
        setcookie('username', "",time()-3600,"/");
        setcookie('email', "",time()-3600,"/");
        setcookie('statuslogin', "",time()-3600,"/");
        header("Location:login.php");

    }
?>