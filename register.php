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
    <title>สมัครสมาชิก</title>
</head>
<body>
    <h1><center>สมัครสมาชิก</center></h1>
    <hr><br>
    <table style="border:2px solid black; width:40%" align="center">       
            <tr><td style="background-color:#6cd2fe;color:black" colspan ="2"><center>กรอกข้อมูล</center> </td></tr>
            <tr><td>ชื่อบัญชี: </td><td><input type="text" name="login" size="85"></td></tr>
            <tr><td>รหัสผ่าน: </td><td><input type="password" name="pwd" size="85"></td></tr>
            <tr><td>ชื่อ-นามสกุล: </td><td><input type="text" name="login" size="85"></td></tr>
            <tr><td rowspan="3">เพศ: </td><td><input type="radio" name="prog" value="0">ชาย</td></tr>             
            <tr><td> <input type="radio"  name="prog" value="1">หญิง</td></tr>
            <tr><td> <input type="radio"  name="prog" value="2">อื่นๆ</td></tr>            
            <tr><td>อีเมล:</td><td> <input type="email" name="email" size="85"></td></tr>
            <tr><td colspan ="2"><center><input type="submit" value="สมัครสมาชิก" ></center></td></tr>    
    </table><br>
    <center> <a href="index.php">กลับไปหน้าหลัก</a></center>

</body>
</html>