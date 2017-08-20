<?php
	if(!isset($_SESSION['username'])){

        $_SESSION['error']='You have to login first';
		header("Location: login.php");
	}

?>