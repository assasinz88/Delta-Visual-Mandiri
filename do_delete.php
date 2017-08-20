<?php
    include 'connect.php';
    $id = $_GET['id'];

    $q="SELECT upload FROM upload where id='$id'";
    $enter=mysqli_query($con,$q);
    $sql=mysqli_fetch_array($enter);
    $upload=$sql['upload'];

    if($upload!=''){
        unlink($upload);
    }

    $q="delete from upload where id='$id'";
    $enter=mysqli_query($con,$q);

    header("Location:admin.php");



?>