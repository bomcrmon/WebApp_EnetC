<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>

    <?php
        $login=$_POST["login"];
        $psd=$_POST["pwd"];
        if($login=="admin" && $psd=="ad1234"){            
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']= session_id();
            header("location:index.php");
            die();
        }
        elseif($login=="member" && $psd=="mem1234"){
            
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']= session_id();
            header("location:index.php");
            die();
        }
        else{
            $_SESSION['error']='error';
            header("location:login.php");
            die();
        }
    ?>


