<html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Libre+Baskerville:400i|Montserrat" rel="stylesheet">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jquery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- jquery-ui -->
		<script src="js/jquery-ui.min.js"></script>
		<!-- font awesome -->
		<script src="https://use.fontawesome.com/b881a9a4a0.js"></script>

		<title>DVM Login</title>
		
    </head>
    <body>

	<?php
	session_start();

	$error="";
	if(isset($_SESSION['error'])){
		$error=$_SESSION['error'];
	}

	?>

    <style>

        form {
			width: 25%;
			display: flex;
			/* flex-wrap: wrap; */
            flex-direction: column;
			margin:0 auto;
			margin-top: 20px;
            border:1.5px solid #bbb;
            padding:20px;
		}
		
		form input[type="password"] {
			width: 100%;
			outline: none;
			border: none;
			border-bottom: 1.5px solid #bbb;
			color: black;
			margin-bottom: 10px;
			padding-bottom: 5px;
			padding-left: 5px;
			transition: border-bottom ease-in-out .25s;
		}
		
		form input[type="password"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}
		
		form input[type="password"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		form input[type="password"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		form input[type="text"] {
			width: 100%;
			outline: none;
			border: none;
			border-bottom: 1.5px solid #bbb;
			color: black;
			margin-bottom: 10px;
			padding-bottom: 5px;
			padding-left: 5px;
			transition: border-bottom ease-in-out .25s;
		}
		
		form input[type="text"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}
		
		form input[type="text"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		form input[type="text"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		form textarea {
			color: black;
			width: 100%;
			border: none;
			border-bottom: 1.5px solid #bbb;
			/* height:75%; */
			resize:vertical;
			margin-bottom: 8px;
			vertical-align: text-top;
			padding: 0px 0px 100px 5px;
			outline: none;
			transition: border ease-in-out .25s;
		}
		
		form textarea::-webkit-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}
		
		form textarea::-moz-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}
		
		form textarea:focus {
			border: none;
			border-bottom: solid 1.5px #F57C00;
			/* border-color: white; */
		}

		form input[type="submit"] {
			border: 1.5px solid #bbb;
			padding: 5px 10px;
			background: none;
			color: #bbb;
			font-weight: lighter;
			align-self: flex-start;

			-webkit-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
			-moz-transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
			transition: background 0.5s ease-in-out, color 0.5s ease-in-out;
		}

		form input[type="submit"]:hover {
			background: #bbb;
			color: white;
			/* border: #bbb; */
		}
	</style>
	

	
    <form action="do_login.php" method="post">
<<<<<<< HEAD
		<div class="form-group">
			<label class="text-danger"><?php echo $error; ?></label>
		</div>
		<div class="form-group">
			<input type="text" placeholder="Username" name="username">
		</div>
        <div class="form-group">
			<input type="password" placeholder="Password" name="password">
		</div>
=======
    <div class="form-section">
		<input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
>>>>>>> origin/master
        <input type="submit">
    </form>


    </body>
</html>