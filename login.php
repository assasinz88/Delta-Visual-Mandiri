<html>
    <header>
        <title>

		</title>
		

    </header>

    <body>

	<?php
	session_start();

	$error="";
	if(isset($_SESSION['error'])){
		$error=$_SESSION['error'];
	}

	?>

    <style>
		.errormsg{
			color:red;
			text-align:center;
		}

        .form-section {
			width: 25%;
			display: flex;
			/* flex-wrap: wrap; */
            flex-direction: column;
            margin:0 auto;
            border:1.5px solid #bbb;
            padding:20px;
		}
		
		.form-section input[type="password"] {
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
		
		.form-section input[type="password"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}
		
		.form-section input[type="password"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section input[type="password"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		.form-section input[type="text"] {
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
		
		.form-section input[type="text"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}
		
		.form-section input[type="text"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section input[type="text"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		.form-section textarea {
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
		
		.form-section textarea::-webkit-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}
		
		.form-section textarea::-moz-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}
		
		.form-section textarea:focus {
			border: none;
			border-bottom: solid 1.5px #F57C00;
			/* border-color: white; */
		}

		.form-section input[type="submit"] {
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

		.form-section input[type="submit"]:hover {
			background: #bbb;
			color: white;
			/* border: #bbb; */
		}
	</style>
	

	<div class="errormsg"><?php echo $error; ?></div>

    <form action="do_login.php" method="post">
    <div class="form-section">
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <input type="submit">
	</div>
	

    </form>


    </body>
</html>