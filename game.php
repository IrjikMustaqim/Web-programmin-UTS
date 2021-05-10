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
        session_start();
        if(!isset($_COOKIE['username'])){
            header("Location:login.php");
        }
        if(isset($_SESSION['gamestart'])){
            $a = mt_rand(0,20);
            $b = mt_rand(0,20);
            setcookie('jawaban',($a + $b),time()+3600,"/");

    ?>
    <div class="parent" style="height:100vh;margin:0;display:flex;justify-content:center;align-items:center;">
    
    <div class="content"style="width:50%;padding:15px;background-color:#fc9003;margin:0 20% 0 20%">
        <div style="flex;justify-content:center;align-items:center;">
        <div style="font-size:1rem;"><h1 style="text-align:center;">Game Penjumlahan</h1></div>
        <form method="post" action="cekjawaban.php">
            <div>
                <h3 style="font-size:0.8rem">Score : <?php print($_SESSION['score']);?></h3>
                <h3 style="font-size:0.8rem">lives : <?php print($_SESSION['live']);?></h3>
            </div>
            <h2 style="font-size:1.5rem;"><?php echo $a." + ".$b?></h2>
            <input class="teks" type="text" name="jawaban">
            <input style="width:50%;display:block;margin:20px auto; border-radius:10px;background-color:#a36615;height:30px;" type="submit" name="jawab" value="Jawab">
            
        </form>
        </div>
    </div>
    </div>
    <?php
        }else{
          
    ?>

    <div class="parent" style="height:100vh;margin:0;display:flex;justify-content:center;align-items:center;">
    
    <div class="content"style="width:50%;padding:15px;background-color:#fc9003;margin:0 20% 0 20%">
        <div style="flex;justify-content:center;align-items:center;">
        <div style="font-size:1rem;"><h1 style="text-align:center;">Game Penjumlahan</h1></div>
        <form method="post" action="cekstart.php">
            <h2 style="font-size:1.5rem;">Selamat Datang <?php 
            if($_COOKIE['statuslogin'] == "pernah"){
                print("kembali ".$_COOKIE['username']);
            }else{
                print($_COOKIE['username']);
            }
            ?></h2>
            <input class="teks" style="background-color:#a36615;" type="submit" name="start" value="Mulai Game">
            <div style="margin-top:5px; "><p style="font-size:1rem;">Bukan Anda ? <a style="color:#a36615"href="logout.php">Klik disini</a></p></div>
            
        </form>
        </div>
    </div>
    </div>
    <?php
        }
    ?>
</body>
</html>