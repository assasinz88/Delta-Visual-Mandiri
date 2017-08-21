<?php
$servername="localhost";
<<<<<<< HEAD
$db_name = "dvm";
$user="root";
$pwd="";
// $user="dvms2455_admin";
// $pwd="T7r?2ID&Qwsz";
=======
$db_name = "dvms2455_dvm";
$user="dvms2455_admin";
$pwd="T7r?2ID&Qwsz";
>>>>>>> origin/master

// $db_name="dvm";
// $user="root";
// $pwd="";

$con=mysqli_connect($servername,$user,$pwd,$db_name);
mysqli_select_db($con,"dvm");

?>

