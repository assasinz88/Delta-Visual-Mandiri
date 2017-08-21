<?php
    include "connect.php";
    
    $email=$_POST['email'];

    $q="INSERT INTO subscribe VALUES ('','$email')";
    $enter=mysqli_query($con,$q);
    
    header("Location:index.php");


?>