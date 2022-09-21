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
    <title>Login NootNoot</title>
</head>
<body>
    <h1> <center> Login NootNoot</center></h1>
    <hr>
    <br>
    <form action="verify.php" method="post">
    <table style="border:2px solid black; width:40%" align="center">    
            <tr><td style="background-color:#6cd2fe;color:black" colspan ="2"><center>เข้าสู่ระบบ</center> </td></tr>
            <tr><td>Login </td><td><input type="text" name="login" size="90"></td></tr>
            <tr><td>Password </td><td><input type="password" name="pwd" size="90"></td></tr>
            <tr><td colspan ="2"><center><input type="submit" value="Login" ></center></td></tr>    
    </table>
    </form>
    <br>
    <center> ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center> 
</body>
</html>