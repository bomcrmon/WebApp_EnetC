<?php 
session_start();

 $title = $_POST['topic'];
 $content = $_POST['comment'];
 $cat_id = $_POST['category'];
 $user_id = $_SESSION["user_id"];

$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

$sql1 = "INSERT INTO post(id,title,content,post_date,cat_id,user_id) 
VALUES('','$title','$content',NOW(),'$cat_id','$user_id')";
$conn->exec($sql1);
$_SESSION['add_login']='success';

 $conn = null;
 header("location:newpost.php");
 die();
?>