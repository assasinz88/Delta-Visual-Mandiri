<?php
    include 'connect.php';
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q=mysqli_query($con,"SELECT * FROM account WHERE username='$username' and password='$password'") or die("error database");

    $fetch=mysqli_fetch_array($q);
    $nrows=mysqli_num_rows($q);

    $username=$fetch[0];
    $name=$fetch[1];
    $password=$fetch[2];
   

    if($nrows>=1){
        $_SESSION['username']=$username;
        $_SESSION['name']=$name;

        header("Location: admin.php");exit;
    } else{
        $_SESSION['error']="Login Error";
        header("Location: login.php?");
    }



?>