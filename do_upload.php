<?php
    include 'connect.php';


    $path='upload/';

    $title=$_POST['title'];
    $caption=$_POST['caption'];

    $imgname=$path.basename($_FILES['upload']['name']);

    $img=$_FILES['upload']['name'];
    $extension=strtolower(pathinfo($img,PATHINFO_EXTENSION));

    if($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
        $_SESSION['error']="not an image!";
        header("Location: admin.php");
        exit;
    }

    if(move_uploaded_file($_FILES["upload"]["tmp_name"],$imgname)){
        echo "The file".basename($_FILES["upload"]["name"]). "has been uploaded!<br>";
    }
    else{   
            $_SESSION['error']="not upload";
            header("Location: admin.php");
        exit;
    }
$query="INSERT INTO upload (id,upload,title,caption) values ('','$imgname','$title','$caption')";
$enter=mysqli_query($con,$query);

header("Location:admin.php");
?>