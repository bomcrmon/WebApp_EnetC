<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <center> Login NootNoot</center></h1>
    <hr>
    <br>
    <center>ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"];?></center><br>
    <table style="border:2px solid black; width:40%" align="center">    
            <tr><td style="background-color:#6cd2fe;color:black" colspan ="2"><center>แสดงความคิดเห็น</center> </td></tr>
            <tr><td></td><td><textarea name="message"rows="6" cols="100"></textarea></td></tr>
            
            <tr><td colspan ="2"><center><input type="submit" value="ส่งข้อความ" ></center></td></tr>    
    </table>
    <center> <a href="index.html">กลับไปหน้าหลัก</a></center>
</body>
</html>