<?php
    include 'connect.php';
    session_start();
    $username=htmlspecialchars($_POST['username']);
    $password=htmlspecialchars($_POST['password']);
    
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $user, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $q = mysqli_query($con,"SELECT * FROM account WHERE username='$username' and password='$password'") or die("error database");
    $statement = $conn->prepare("SELECT * FROM account WHERE username = :username");
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    $fetch = $statement->fetchAll();
    $row = $fetch[0];
    $password_h = $row['password'];
    $name = $row['name'];
    // print_r($row);
    $nrows= $statement->rowCount();
    if($nrows>=1){
        if(password_verify($password, $password_h)){
            $_SESSION['username']=$username;
            $_SESSION['name']=$name;
            // echo "$username and $name found";
            header("Location: admin.php");
            exit;
        } else {
            $_SESSION['error']="Login Error";
            header("Location: login.php?");
            exit;
            // echo "wrong pw";
        }
    } else{
        // echo "user not found";
        $_SESSION['error']="Login Error";
        header("Location: login.php?");
        exit;
    }


?>