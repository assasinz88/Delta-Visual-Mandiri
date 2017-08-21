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
    <?php include('header.php')?>
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


<?php include('footer.php')?>

</body>

</html>