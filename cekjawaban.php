<?php
    session_start();
    if(isset($_COOKIE['username'])){
        if(isset($_POST["jawab"])){
            if($_POST["jawaban"] == $_COOKIE['jawaban']){
                $_SESSION['score'] += 10;
            }else{
                $_SESSION['live'] -= 1;
                $_SESSION['score'] -= 2;            
            }
            if($_SESSION['live'] <=0){
                unset($_SESSION['gamestart']);
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
                $stmt = $conn->prepare("SELECT score FROM math_game WHERE email = ?");
                $stmt->bind_param("s", $email);

                $email = $_COOKIE['email'];
                $stmt->execute();
                $r = $stmt->get_result();
                $d = $r->fetch_assoc();

                if($d['score'] < $_SESSION['score']){

                    $stmt = $conn->prepare("UPDATE math_game SET score = ? WHERE email = ?");
                    $stmt->bind_param("is", $score,$email);
                    
                    $score = $_SESSION['score'];
                    $email = $_COOKIE['email'];
                    $stmt->execute();
                    
                    $stmt->close();
                    $conn->close();
                    header('Location:HOF.php');
                }else{
                    $stmt->close();
                    $conn->close();
                    header('Location:HOF.php');
                }
            }else{
                header('Location:game.php');
            }
        }else{
            header('Location:login.php');
        }
    }else{
        header('Location:login.php');
    }
?>