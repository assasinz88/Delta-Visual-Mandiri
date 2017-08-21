<?php
$servername="localhost";
$db_name = "dvm";
$user="root";
$pwd="";
// $user="dvms2455_admin";
// $pwd="T7r?2ID&Qwsz";

// $db_name="dvm";
// $user="root";
// $pwd="";

$con=mysqli_connect($servername,$user,$pwd,$db_name);
mysqli_select_db($con,"dvm");

?>

