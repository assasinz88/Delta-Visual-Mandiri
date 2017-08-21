<!DOCTYPE html>
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

	<!-- slick carousel -->
	<script type="text/javascript" src="slick/slick.min.js"></script>

	<!-- font awesome -->
	<script src="https://use.fontawesome.com/b881a9a4a0.js"></script>

	<!-- sly js -->
	<script type="text/javascript" src="js/sly.min.js"></script>


	<title>Delta Visual Mandiri</title>
	<link type="text/css" rel="stylesheet" href="index.css">

</head>

<?php
	include 'connect.php';
?>

<body>
    <script type="text/javascript" src="header.js"></script>
	<link rel="stylesheet" type="text/css" href="header.css">
	<div class="header aaa">
		<div class="menu">
			<ul>
				<li class="home-button">HOME<span class="overlay nav-overlay"></span></li>
				<li class="about-button">ABOUT US<span class="overlay nav-overlay"></span></li>
				<li class="product-button">OUR PRODUCTS<span class="overlay nav-overlay"></span></li>
				<li class="gallery-button">GALLERY<span class="overlay nav-overlay"></span></li>
				<li class="contact-button">CONTACT US<span class="overlay nav-overlay"></span></li>
			</ul>

		</div>
		<div class="arrow"><i class="fa fa-chevron-right" aria-aaa="true"></i></div>
	</div>
	<style>
		.columns{
			column-width: 320px;
			column-gap: 15px;
			width: 90%;
			max-width: 1100px;
			margin: 50px auto;
		}
		.columns figure{
			background: #fefefe;
			border: 2px solid #fcfcfc;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			margin: 0 2px 15px;
			padding: 15px;
			/* padding-bottom: 10px; */
			transition: all 0.4s cubic-bezier(.25,.8,.25,1);
			display: inline-block;
			column-break-inside: avoid;
			cursor: pointer;
		}

		.caption h4{
			font-weight: bold;
			/* margin-top: 0; */
		}
		.caption p{
			margin: 0;
		}
		.columns figure img {
			width: 100%; height: auto;
			border-bottom: 1px solid #ccc;
			padding-bottom: 15px;
			margin-bottom: 5px;
		}
		.columns:hover figure:not(:hover) {
			opacity: 0.4;
		}
		.columns figure:hover{
			box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
		}
		@media screen and (max-width: 750px) { 
			.columns { column-gap: 0px; }
			.columns figure { width: 100%; }
		}
	</style>
	<div class="columns">
		<?php 
			$q = "SELECT * FROM upload";
			$enter = mysqli_query($con,$q);

			while($sql=mysqli_fetch_array($enter)){
				$upload=$sql[1];
				$title=$sql[2];
				$caption=$sql[3];
			


		?>
		<figure class="card" onclick="showModal(event, this)">
			<img src="<?php echo $upload; ?>" alt="Image couldnt be buffered">
			<figcaption class="caption">
				<h4><?php echo $title; ?></h4>
				<p><?php echo $caption; ?></p>
			</f>
		</figure>
			<?php } ?>
	</div>
	<style>
		.modall{
			z-index: -100;
			opacity: 0;
			background: rgba(0,0,0,0.5);
			position: fixed;
		}
		.modall-box{
			top: -100%;
			overflow-y: scroll;
			background: #fefefe;
			border: 2px solid #fcfcfc;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			padding: 30px;
			/* padding-bottom: 10px; */
			transition: all 0.4s cubic-bezier(.25,.8,.25,1);
			margin: 20px auto;
			height: auto;
			max-height: 90%;
			width: 90%;
			max-width: 1100px;
			background: white;
			position: relative;
		}
		.modall-box figure{
			padding: 30px;
			margin: 0 auto;
		}
		.modall-box figure img{
			width: 100%; height: auto;
			border-bottom: 1px solid #ccc;
			padding-bottom: 15px;
			margin-bottom: 5px;
		}
		.modall-box .fa-times{
			width: 100%;
			text-align: right;
			color: #999;
			font-size: 20px;
			cursor: pointer;
		}
		.modall-box .fa-times:hover{
			color: black;
		}
	</style>
	<div class="overlay modall" >
		<div class="modall-box">
			<span class="fa fa-times"></span>
			<figure>
				<img src="#">
				<figcaption class="caption">
					<h4>Title of Image</h4>
					<p>Caption of the image</p>
				</figcaption>
			</figure>
		</div>
	</div>
	<script>
		function showModal(e, source){
			// console.log(source);
			var target = $(source);
			$('.modall img').attr('src', target.children('img').attr('src'));
			// console.log(target.find('h4').html());
			$('.modall h4').html(target.find('h4').html());
			$('.modall p').html(target.find('p').html());
			$('.modall').css({'z-index': 100});
			$('.modall .modall-box').animate({'top': 0});
			$('.modall').animate({'opacity': 1});
		}
		$('.modall .fa-times').click(function(){
			$('.modall .modall-box').css('top', '-100%');
			$('.modall').animate({
				'opacity': 0
			}, 500, function(){
				$('.modall').css('z-index', '-100');
			});
		});
	</script>


	<link rel="stylesheet" type="text/css" href="footer.css">
	<div class="footer">
		<div class="footer-top container-fluid">
			<div class="footer-nav">
				<ul style="list-style: none; display: flex; flex-direction: column; justify-content: space-between; height: 100%">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.html">ABOUT US</a></li>
					<li><a href="gallery.php">GALLERY</a></li>

				</ul>
			</div>
			<div class="footer-details">
				<p style="font-weight: bold; margin-bottom: 5px">ADDRESS</p>
				<p style="margin: 0; margin-bottom: 10px; font-size: 12px">
					Sentra Bisnis Ayani Megamall AA - 19 Pontianak
				</p>
				<p style="font-weight: bold; margin-bottom: 5px">TEL/FAX</p>
				<p style="margin: 0; font-size: 12px">
					(0561) 766228
				</p>
			</div>
			<div class="footer-connect">
				<p style="font-weight: bold; margin-bottom: 5px">CONNECT WITH US</p>
				<table style="font-size: 12px">
					<tr>
						<td colspan="2"><a>Contact</a></td>
					</tr>
					<tr>
						<td><i class="fa fa-envelope-o"></i></td>
						<td><a href="">dvm.printing@yahoo.co.id</a></td>
					</tr>
					<tr>
						<td><i class="fa fa-instagram"></i></td>
						<td><a href="">Instagram</a></td>
					</tr>
					<tr>
						<td><i class="fa fa-facebook-official"></i></td>
						<td><a href="">Facebook</a></td>
					</tr>
				</table>
			</div>
			<div class="footer-form">
				<p style="font-weight: bold">SUBSCRIBE TO OUR NEWSLETTER</p>
				<form>
					<input type="text" name="email" placeholder="Email address...">
					<input type="submit">
				</form>
			</div>
		</div>
		<div class="footer-copyright">
			<p class="container" style="margin:0; padding:0">
				&copy; 2017 Delta Visual Mandiri - Proudly designed by <a>Albert Antonio</a> &amp; <a>Laurentius Dominick L.</a>
			</p>
		</div>
	</div>

</body>

</html>