<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery/jquery.js"></script>
    <style src="bst/css/bootstrap.min.css"></style>
    <script src="bst/js/bootstrap.min.js"></script>
    
</head>
<style>
    *{
        margin:0;
        font-family:boom;
    }
    .content div{
        display:grid;
        justify-content:center;
        align-content:center;
    }

    .content{
        border-radius: 20px;
        border-style: solid;
        border-width: 5px;
        border-color: white;


    }
    
    h2{
        text-align: center;
        margin-top: 20px;
        font-size: 90%;
    }

    .teks{
        display:block;
        margin:auto auto auto auto;
        border-radius:10px;      
        width: 90%;
        
    }
    @font-face {
        font-family: boom;
        src: url("Righteous-Regular.ttf");
    }


</style>
<body style="font-size:50px;margin:0;background-image: url('math.jpg');background-position:center;background-size:cover;">
    <?php
        if(isset($_COOKIE['username'])){
            header("Location:login.php");
        }
    ?>
    <div class="parent" style="height:100vh;margin:0;display:flex;justify-content:center;align-items:center;">
    
    <div class="content"style="width:50%;padding:15px;background-color:#fc9003;margin:0 20% 0 20%">
        <div style="flex;justify-content:center;align-items:center;">
        <div style="font-size:1rem;"><h1 style="text-align:center;">Game Penjumlahan</h1></div>
        <form method="post" action="ceklogin.php">
            <h2 style="font-size:1.5rem;">Masukkan Nama</h2>
            <input class="teks" type="text" name="username">
            <h2 style="font-size:1.5rem;">Masukkan Email</h2>
            <input class="teks" type="email" name="email">
            <input style="width:50%;display:block;margin:20px auto; border-radius:10px;background-color:#a36615;height:30px;" type="submit" name="submit" value="Masuk">
        </form>
        <div style="font-size:0.8rem;color:red;"><p><?php 
        if(isset($_COOKIE['statuslogin'])){
            print($_COOKIE['statuslogin']);
        }
        ?></p></div>
        </div>
    </div>

        
    
    </div>
</body>
</html>