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


	<title>Gallery | Delta Visual Mandiri</title>
	
	<link type="text/css" rel="stylesheet" href="gallery.css">
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
				<li class="home-button"><a>HOME</a><span class="overlay nav-overlay"></span></li>
				<li class="about-button"><a href="about.html">ABOUT US</a><span class="overlay nav-overlay"></span></li>
				<li class="product-button"><a>OUR PRODUCTS</a><span class="overlay nav-overlay"></span></li>
				<li class="gallery-button"><a>GALLERY</a><span class="overlay nav-overlay"></span></li>
				<li class="contact-button"><a>CONTACT US</a><span class="overlay nav-overlay"></span></li>
			</ul>

		</div>
		<div class="arrow"><i class="fa fa-chevron-right" aria-aaa="true"></i></div>
	</div>
	<style>
		
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
			</figcaption>
		</figure>
			<?php } ?>
	</div>
	<style>
		
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
				<form action="do_subscribe.php" method="post">
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