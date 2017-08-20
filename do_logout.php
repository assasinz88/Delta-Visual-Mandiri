<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
?>
<script>
	location.href='login.php';
</script>