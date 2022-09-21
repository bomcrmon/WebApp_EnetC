<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    
    
    
    <h1> <center> Login NootNoot</center></h1>
    <hr>
    <div align="center">
        <?php
            $login=$_POST["login"];
            $psd=$_POST["pwd"];
            if($login=="admin" && $psd=="ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']= session_id();
            }
            elseif($login=="member" && $psd=="mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']= session_id();
            }
            else{
                echo "ชื่อบัญชีหรื่อรหัสผ่านไม่ถูกต้อง";
            }
        ?>
        <br><a href="index.php">กลับไปหน้าหลัก</a>
    </div>
     

</body>
</html>