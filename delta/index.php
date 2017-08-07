<!DOCTYPE html>
<html>
	<head>

		<audio id="music" src="music/dust.mp3" autoplay="true"></audio>

		<script> /* Musik dulu coyy */
		  myAudio=document.getElementById('music');
		  myAudio.volume=0;
		  myAudio.addEventListener('canplaythrough', function() {
		    if(this.currentTime < 17.3){this.currentTime = 17.3;}
		    this.play();
		  });
		</script>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link type="text/css" rel="stylesheet" href="first.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- <link rel="stylesheet" href="style.css"> -->


		<title> </title>

		
		

		

		<style>
		.borders{
			border:1px solid black;
		}
			
		</style>
	</head>
	<body>

		<div class="container-fluid">

			<div class="row">
			
				<div class="col-sm-12" id="header">

					
						<div class="header-menu" id="navbar"> <!--HAMBURGER MENU-->

							<div class="hamburger">

								<span></span>
								<span></span>
								<span></span>
								<span></span>

							</div>

							<div class="menu-container">

								<ul class="nav nav-stacked" id="menu-stacked">

									<li role="presentation"><a class="text-center" id="home-button">Home</a></li>
									<li role="presentation"><a class="text-center" id="about-button">About Us</a></li>
									<li role="presentation"><a class="text-center" id="gallery-button">Gallery</a></li>
									<li role="presentation"><a class="text-center" id="product-button">Our Product</a></li>
									<li role="presentation"><a class="text-center" id="contact-button">Contact Us</a></li>

								</ul>

							</div>

						</div>

						<div class="header-logo"> <!--Logo-->
							<b id="logo-text"> Delta Visual Mandiri </b>
							<img src="img/logo1.png" alt="&#735" id="header-logo">

						</div>

				</div>

			</div>

			<div class="row borders" id="home"> <!-- HOME -->

				<div class="col-sm-12">

					<h1 class="home-title text-center borders"> HOME </h1>

					<div class="slideshow">

						<div class="flexslider">

							<ul class="slider">

								<li>

									<a href="#"><img src="img/slideshow/1.png"></a>

								</li>

								<li>

									<img src="img/slideshow/2.gif">

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

			<div class="row borders" id="about"> <!-- About us -->
				<div class="col-sm-12">
					<h1 class="about-title text-center borders"> “Kepuasan Anda Kebanggaan Kami” </h1>
					<p class="about-subtitle small text-center borders">Kami adalah perusahaan yang bergerak dibidang perdagangan dan jasa, yang berdomisili kota Ponatianak. Kami telah memiliki pengalaman yaang cukup banyak dalam bidangnya, hal ini didukung oleh tenaga kerja yang handal yang akan selalu siap memberikan yang terbaik kepada client kami, sesuai dengan motto kami yaitu : “Kepuasan Anda Kebanggaan Kami”.</p>
				</div>
			</div>

			<div class="row" id="gallery"> <!-- Gallery -->
				<div class="col-sm-12">
					<h1 class="gallery-title text-center borders"> Gallery </h1>
					<p class="gallery-subtitle small text-center borders">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			</div>

			<div class="row" id="product"> <!-- Our Product -->
				<div class="col-sm-12">
					<h1 class="product-title text-center borders"> Our Product </h1>
					<p class="product-subtitle small text-center borders">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			</div>

			<div class="row" id="contact"> <!-- Contact Us -->
				<div class="col-sm-12">
					<h1 class="contact-title text-center borders"> Contact Us </h1>
					<p class="contact-subtitle small text-center borders">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				</div>
			</div>

			<div class="row" id="footer">
				<div class="col-sm-12">
				<h1 class="contact-title text-center borders"> Footer </h1>
					<p class="contact-subtitle small text-center borders">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>

		</div>
	<script>
		$(document).ready(function()
		{
			$(".menu-container").hide();
			$("#logo-text").fadeIn(1000);
			$("#header-logo").fadeIn(1000);


			$('.hamburger').click(function()
			{
					$(this).toggleClass('open');
					$(".menu-container").slideToggle(300);
			});

		});

		$(window).scroll(function() /*Fade In Logo teks */
		{
		    $("#logo-text").css("opacity", 1 - $(window).scrollTop()/90);
		});

		$(window).scroll(function() /*Fade In Logo */
		{
		    $("#header-logo").css("opacity", 1 - $(window).scrollTop()/90);
		});

		/* navigation scroll animation */
		$("#home-button").click(function()
		{
			$("body,html").animate(
			{
				scrollTop: $("#home").offset().top
			},1000);
		});

		$("#about-button").click(function()
		{
			$("body,html").animate(
			{
				scrollTop: $("#about").offset().top
			},1000);
		});

		$("#gallery-button").click(function()
		{
			$("body,html").animate(
			{
				scrollTop: $("#gallery").offset().top
			},1000);
		});

		$("#product-button").click(function()
		{
			$("body,html").animate(
			{
				scrollTop: $("#product").offset().top
			},1000);
		});

		$("#contact-button").click(function()
		{
			$("body,html").animate(
			{
				scrollTop: $("#contact").offset().top
			},1000);
		});

		$(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider'
        });
    });


	</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	</body>
</html>