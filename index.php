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

<body>
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

	<div class="container-fluid" id="top">
		<div id="network"></div>
		<div class="overlay home" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
			<h1 class="quote motto" style="text-align:center">Delta Visual Mandiri</h1>
			<h3 class="motto quote" style="font-style:italic">"Kepercayaan Anda Kebanggaan Kami"</h3>
		</div>


	</div>
	<script type="text/javascript" src="js/particle-network.min.js"></script>

	<div class="about">
		<div>
			<h1>"Kepercayaan Anda Kebanggaan Kami"</h1>
			<p style="font-size:18px;">Kami adalah perusahaan yang bergerak dibidang perdagangan dan jasa, yang berdomisili kota Pontianak. Kami telah memiliki
				pengalaman yaang cukup banyak dalam bidangnya, hal ini didukung oleh tenaga kerja yang handal yang akan selalu siap memberikan
				yang terbaik kepada client kami</p>

			<a href="about.html">Learn More >>></a>
		</div>
	</div>

	<div class="product">
		<div class="filter"></div>
		<div class="product-intro">
			<h1>Produk-produk Kami</h1>
		</div>

		<div class="product-list">

			<div class=" icon" style="grid-area: satu">
				<img src="img/print.png">
				<p>Digital Printing</p>
			</div>

			<div class=" icon" style="grid-area: dua">
				<img src="img/poster.png">
				<p>Percetakan</p>
			</div>

			<div class=" icon" style="grid-area:tiga">
				<img src="img/store.png">
				<p>Pembuatan Neon Box, Shop Sign dan Street Sign</p>
			</div>

			<div class=" icon" style="grid-area:empat">
				<img src="img/jasa.png">
				<p>Biro Jasa dan Menyediakan titik Reklame</p>
			</div>
			<div class=" icon" style="grid-area:lima">
				<img src="img/sticker.png">
				<p>Sticker Car Service dan One Way Vision</p>
			</div>


		</div>

	</div>
	<style>
		.carousel {
			width: 100%;
		}

		.slidee {
			list-style: none;
			padding: 0;
			flex: none;
		}

		.slide-slide {
			/* display: inline-block; */
			float: left;
			position: relative;
			width: 800px;
			height: 450px;
			margin: 2px;
			/* background: black; */
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			position: relative;
			transition: all ease-in-out .5s;
		}
		.slide-slide .caption{
			top: auto;
			height: auto;
			bottom: 0;
			padding: 15px;
			color: white;
			background: rgba(0,0,0,0.5);
			display: none;
			transition: display ease-in-out .5s;
		}
		.slide-slide h4{
			font-weight: bold;
			margin-top: 0;
		}
		.slide-slide p{
			margin: 0;
		}
		.slide-slide.active .caption{
			display: block;
		}
	</style>
	<div class="gallery">
		<h1>GALLERY</h1>
		<div class="carousel">
			<ul class="slidee">
				<?php for($i = 1; $i <= 5; ++$i): ?>
				<li class="slide-slide" style="background-image:url('img/gallery-carousel/<?php echo $i?>.jpg')">
					<div class="overlay caption">
						<h4>Title <?php echo $i?></h4>
						<p>Caption example</p>
					</div>
				</li>
				<?php endfor;?>
			</ul>
		</div>
	</div>
	<script>
		var $frame = $('.carousel');
		var $wrap = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
			easing: 'easeOutExpo',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Cycling
			cycleBy: 'items',
			cycleInterval: 2000,
			pauseOnHover: 1,

			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});
	</script>

	<style>
		.order-intro {
			padding-bottom: 20px;
			width: 100%;
			border-bottom: solid 1px #222;
			margin-bottom: 20px;
		}

		.form {
			display: flex;
			justify-content: space-between;

			/* border-left: solid 5px #ddd; */
			/* padding-left: 20px; */
			/* padding: 10px 0 10px 20px; */
			margin: 20px 0;
		}

		.form-section:nth-child(2) {
			width: 50%;
			display: flex;
			/* flex-wrap: wrap; */
			flex-direction: column;
		}

		.form-section:nth-child(2) input[type="email"] {
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

		.form-section:nth-child(2) input[type="email"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) input[type="email"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) input[type="email"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		.form-section:nth-child(2) input[type="text"] {
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

		.form-section:nth-child(2) input[type="text"]::-webkit-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) input[type="text"]::-moz-input-placeholder {
			color: #bbb;
			/* padding-left: 5px; */
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) input[type="text"]:focus {
			border-bottom: 1.5px solid #F57C00;
		}

		.form-section:nth-child(2) textarea {
			color: black;
			width: 100%;
			border: none;
			border-bottom: 1.5px solid #bbb;
			/* height:75%; */
			resize: vertical;
			margin-bottom: 8px;
			vertical-align: text-top;
			padding: 0px 0px 100px 5px;
			outline: none;
			transition: border ease-in-out .25s;
		}

		.form-section:nth-child(2) textarea::-webkit-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) textarea::-moz-input-placeholder {
			color: #bbb;
			/* font-weight: bold; */
		}

		.form-section:nth-child(2) textarea:focus {
			border: none;
			border-bottom: solid 1.5px #F57C00;
			/* border-color: white; */
		}

		.form-section:nth-child(2) input[type="submit"] {
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

		.form-section:nth-child(2) input[type="submit"]:hover {
			background: #bbb;
			color: white;
			/* border: #bbb; */
		}

		.form-section h4 {
			font-weight: bold;
			margin-bottom: 20px;
		}

		.form-row [type="checkbox"] {
			display: none;
		}

		@keyframes wipe2 {
			0% {
				width: 0;
			}
			50% {
				width: 100%;
				left: 0;
			}
			100% {
				width: 0;
				left: 100%;
			}
		}

		.form-row [type="checkbox"]+label::before {
			position: absolute;
			display: block;
			content: '';
			width: 0;
			background: #F57C00;
			height: 100%;
			top: 0;
			left: 0;
		}

		.form-row [type="checkbox"]+label::after {
			position: absolute;
			display: block;
			content: '';
			width: 0;
			background: #bbb;
			height: 100%;
			top: 0;
			left: 0;
		}

		.form-row [type="checkbox"]:checked+label::before {
			animation: wipe2 .5s;
		}

		.form-row [type="checkbox"]:not(:checked)+label::after {
			animation: wipe2 .5s reverse;
		}

		.form-row [type="checkbox"]:checked+label {
			color: #F57C00;
		}

		.form-row [type="checkbox"]+label {
			position: relative;
			font-size: 15px;
			font-weight: normal;
			transition: color ease-in-out .5s;
			cursor: pointer;
			color: #bbb;
			-webkit-user-select: none;
			/* Chrome/Safari */
			-moz-user-select: none;
			/* Firefox */
			-ms-user-select: none;
			/* IE10+ */
			/* Rules below not implemented in browsers yet */
			-o-user-select: none;
			user-select: none;
		}
	</style>
	<div class="order">
		<div class="order-intro">
			<h1>Kabari Kami Sekarang!</h1>
			<h3 style="margin-top: 10px">Isi form dibawah ini dan kami akan segera menghubungi Anda!</h3>
		</div>
		<div class="object">
			<form class="form" action="do_mail.php" method="post">
				<div class="form-section">
					<h4>Pemilihan jasa (pilih sedikitnya satu)</h4>
					<div class="form-row">
						<input type="checkbox" id="print" value="Digital Printing" name="jasa[]">
						<label for="print">Digital Printing</label>
					</div>
					<div class="form-row">
						<input type="checkbox" id="cetak" value="Percetakan" name="jasa[]">
						<label for="cetak">Percetakan</label>
					</div>
					<div class="form-row">
						<input type="checkbox" id="sign" value="Sign & Neon Box" name="jasa[]">
						<label for="sign">Sign &amp; Neon Box</label>
					</div>
					<div class="form-row">
						<input type="checkbox" id="reklame" value="Biro Jasa & Reklame" name="jasa[]">
						<label for="reklame">Biro Jasa &amp; Reklame</label>
					</div>
					<div class="form-row">
						<input type="checkbox" id="sticker" value="Sticker & OWV" name="jasa[]">
						<label for="sticker">Sticker Mobil &amp; One Way Vision</label>
					</div>
				</div>
				<div class="form-section">
					<input type="text" placeholder="Name" name="name">
					<input type="email" placeholder="Email" name="email">
					<textarea placeholder="Message" name="message"></textarea>
					<input type="submit">
				</div>

			</form>
		</div>

	</div>

	<link rel="stylesheet" type="text/css" href="footer.css">
	<div class="footer">
		<div class="footer-top container-fluid">
			<div class="footer-nav">
				<ul style="list-style: none; display: flex; flex-direction: column; justify-content: space-between; height: 100%">
					<li><a>HOME</a></li>
					<li><a>ABOUT US</a></li>
					<li><a>GALLERY</a></li>
					<li><a>OUR PRODUCTS</a></li>
					<li><a>CONTACT US</a></li>
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
	<script type="text/javascript">
		$(document).ready(function () {
			$(".header").css('left', -$('.menu').width() + 'px');

			var options = {
				particleColor: '#555',
				background: '#fff',
				interactive: true,
				speed: 'medium',
				density: 9e3
			}
			var particleCanvas = new ParticleNetwork(document.getElementById('network'), options);
			$('#top').mousemove(function (e) {
				var centerX = $('#top').width() / 2;
				var centerY = $('#top').height() / 2;
				var offset = $('#top').offset();
				var posX = e.pageX - offset.left;
				var posY = e.pageY - offset.top;
				var strength = 100;
				// console.log('translate(' + (centerX - posX) + 'px, ' + (centerY - posY) + 'px)');
				$('.motto').css('transform', 'translate(' + -(centerX - posX) / strength + 'px, ' + -(
					centerY - posY) / strength + 'px)');
				$('#network canvas').css('transform', 'translate(' + (centerX - posX) / (strength / 2) + 'px, ' + (
					centerY - posY) / (strength / 2) + 'px)');
			});

			$(".arrow").click(function () {
				console.log($('.menu').width());
				console.log($('.arrow').css('left'));
				if (!$('.header').hasClass("aaa")) {
					$(".header").css('left', -$('.menu').width() + 'px');
					$(".arrow i").css('transform', 'rotate(0deg)');
					$('.header').addClass("aaa");

				} else {
					$(".header").css('left', '0');
					$('.header').removeClass("aaa");
					$(".arrow i").css('transform', 'rotate(180deg)');
				}
			});

			$(".home-button").click(function () {
				$("body,html").animate({
					scrollTop: $(".home").offset().top
				}, 1000);
			});

			$(".about-button").click(function () {
				$("body,html").animate({
					scrollTop: $(".about").offset().top
				}, 1000);
			});
		});
	</script>

</body>

</html>