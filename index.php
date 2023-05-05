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

	<!-- Javascript -->
	<script src="assets/js/home-carousel.js"></script>
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
<link rel="stylesheet" href="assets/Css/Home.css" />

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
	<!-- Main container start -->
	<div class="Main-container">
		<!-- Section 1 -->
		<div class="section1"></div>
		<!-- Section 2 start -->
		<div class="section2">
			<div class="text-header">
				<p>
					Training <br />
					program
				</p>
			</div>
			<div class="training-list">
				<!-- StudentTraining -->
				<div class="col col-third list-training-item text-center">
					<img src="./assets/img/homepage/section2_itemlist1.png" alt="StudentTraining" />
					<a href="./courses/student.php">Student Training</a>
				</div>
				<!-- TeacherTraining -->
				<div class="col col-third list-training-item text-center">
					<img src="./assets/img/homepage/section2_itemlist2.png" alt="TeacherTraining" />
					<a href="./courses/teacher.php">Teacher Training</a>
				</div>
				<!-- PublicTraining -->
				<div class="col col-third list-training-item text-center">
					<img src="./assets/img/homepage/section2_itemlist3.png" alt="PublicTraining" />
					<a href="academic.php">Public Training</a>
				</div>
			</div>
			<div style="height: 100px"></div>
		</div>

		<!-- Section 2 end -->

	</div>
	<!-- Main container end-->
	<!-- MAIN CONTENT END -->

	<!-- FOOTER START -->
	<?php include "./Template/footer.html" ?>
	<!-- FOOTER END -->
</body>

</html>