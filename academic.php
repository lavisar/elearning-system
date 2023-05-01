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

	<!-- WEBSITE UNDER DEVELOPMENT ALERT -->
	<div class="img--container" style="width: 100%; height: auto; text-align: center; background-color: #4e4e4e;">
		<img src="assets/img/forNotCompletedWeb/flat.jpg" style="width: 50%" />
	</div>
	<!-- WEBSITE UNDER DEVELOPMENT ALERT -->

	<!-- MAIN CONTENT END -->
	<!-- FOOTER START -->
	<?php include "./Template/footer.html" ?>
	<!-- FOOTER END -->
</body>

</html>