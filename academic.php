<!DOCTYPE html>
<html lang="en">

<head>
	<title>Elearn - Online Learning Solution</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Header style -->
	<link rel="stylesheet" href="assets/Css/Header.css" />
	<!-- Footer style -->
	<link rel="stylesheet" href="assets/Css/Footer.css" />
	<!-- Main Style -->
	<link rel="stylesheet" href="assets/Css/Academic.css" />
	<!-- Javascript -->
	<script src="assets/js/realtime-clock.js"></script>
	<!-- Bootstrap CDN start -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Bootstrap CDN end   -->
	<!-- fa icon CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Tourney" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body onload="startTime()">
	<!-- clock and some infomation here -->
	<div class="nav--top-Info">
		<div id="txt" class="nav__clock--left"></div>
		<div class="nav__mail--right">e-learning.dev@gmail.com</div>
	</div>
	<!-- NAV BAR START -->
	<?php include "./Template/nav.html" ?>
	<!-- NAV BAR END -->

	<!-- MAIN CONTENT START -->
	<section class="academic">
		<div class="main">
			<img src="assets/img/academicpage/academic.jpg">
			<div class="all-text">
				<h4>Academic</h4>
				<h1>A House Of Creative & Intelligent</h1>
				<p>
					Together, the creativity and intelligence of the residents of this house create a dynamic and stimulating environment. It's a place where you can come to be inspired, to learn, and to grow. Whether you are an artist, an entrepreneur, a scientist, or just someone who loves to think deeply about the world, a house of creative and intelligent individuals is the perfect place to call home.
				</p>
				<div class="btn" style="text-decoration: none;">
					<button type="button"><a href="about.php" style="color: black">Our Team</a></button>
					<button type="button" class="btn2"><a href="login.php" style="color: white">Learn More</a></button>
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN CONTENT END -->

	<!-- FOOTER START -->
	<?php include "./Template/footer.html" ?>
	<!-- FOOTER END -->
</body>

</html>