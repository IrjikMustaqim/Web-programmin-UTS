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
        
        if(!isset($_COOKIE['username'])){
            header("Location:login.php");
        }

    ?>
    <div class="parent" style="height:100vh;margin:0;display:flex;justify-content:center;align-items:center;">
    
    <div class="content"style="width:50%;padding:15px;background-color:#fc9003;margin:0 20% 0 20%">
        <div style="flex;justify-content:center;align-items:center;">
        <div style="font-size:1rem;"><h1 style="text-align:center;">Hall Of Fame</h1></div>
        <table class="table table-borderless" style="font-size:0.95rem;">
            <thead>
                <tr>
                    <th scope="col">Position</th>
                    <th scope="col">username</th>
                    <th scope="col">score</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "jnXjPmiNwPu5tbnL";
                $dbname = "hall_of_fame";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                // prepare and bind
                $stmt = $conn->query("SELECT username,score FROM math_game ORDER BY score DESC LIMIT 10");
                if ($stmt->num_rows > 0) {
                    $pos = 1;
                    while($row = $stmt->fetch_assoc()) {
                        
                    ?>
                        <tr>
                            <th scope="row"><?php echo $pos?></th>
                            <td><?php echo $row["username"];?></td>
                            <td><?php echo $row["score"];?></td>
                        </tr>
                        
                    <?php
                        $pos += 1;
                    }
                  } else {
                    echo "Ada masalah dalam koneksi database";
                  }
                  $conn->close();
                ?>
            </tbody>
        </table>
        <div style="font-size:1rem;"><a href="game.php">main lagi</a></div>
        </div>
    </div>

        
    
    </div>
</body>
</html>