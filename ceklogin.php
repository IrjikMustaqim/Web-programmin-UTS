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
    if($_POST['username'] != "" && $_POST['email'] != ""){   
        $sql = "SELECT username,email FROM math_game WHERE email= ?";
        $result = $conn->prepare($sql);
        $result->bind_param("s",$email);

        $email = $_POST['email'];
        $result->execute();
        $k = $result->get_result();
        $d = $k->fetch_assoc();
        if($d !=NULL){
                if($d['username'] == $_POST['username']){
                    setcookie('statuslogin','pernah',time()+3600,"/");
                    setcookie('username', $_POST['username'], time()+3600,"/");
                    setcookie('email', $_POST['email'], time()+3600,"/");
                    header('Location:game.php');
                }else{
                    setcookie('statuslogin','email tidak bisa digunakan untuk 2 username berbeda',time()+3600,"/");
                    header('Location:login.php');
                }
            
        }else{
            
            $sql = "INSERT INTO math_game (username,email) VALUES (?,?)";
            $result = $conn->prepare($sql);
            $result->bind_param("ss",$username,$email);
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $result->execute();
            setcookie('statuslogin','belum',time()+3600,"/");
            setcookie('username', $_POST['username'], time()+3600,"/");
            setcookie('email', $_POST['email'], time()+3600,"/");
            header('Location:game.php');


        }    
        $result->close();
        $conn->close();
    }else{
        $conn->close();
        setcookie('statuslogin','masukkan username dan email',time()+3600,"/");
        header('Location:login.php');
    }

?>