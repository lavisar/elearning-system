<!DOCTYPE html>
<html lang="en">

<head>
	<title>ABOUT | Elearn - Online Learning Solution</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Header style -->
	<link rel="stylesheet" href="assets/Css/Header.css" />
	<!-- Footer style -->
	<link rel="stylesheet" href="assets/Css/Footer.css" />
	<!-- Main Style -->
	<link rel="stylesheet" href="assets/Css/About.css" />
	<!-- Javascript -->
	<script src="assets/js/realtime-clock.js"></script>
	<!-- Bootstrap CDN start -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Bootstrap CDN end  -->
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
	<div class="Main-container">
		<!-- Section 1 -- Pictures -->
		<div class="section1"></div>
		<!-- Section 2 -- Content & pic  -->
		<div class="section2">
			<!-- Content -->
			<div class="section2-content col-half">
				<h3>who we are</h3>
				<p>
					E-learning is an online learning platform that offers a
					wide range of subjects taught by top teachers from
					across the country, including foreign subjects, to
					students nationwide and registered students.
				</p>
				<h3>our solution</h3>
				<p>
					We provides a livestream learning platform that promotes
					interaction with teachers and enables easy video review
					of course material. It offers comprehensive education to
					meet the learning and personal development needs of all
					Vietnamese students.
				</p>
			</div>
			<!-- picture float right -->
			<img class="col-half" src="assets/img/aboutpage/section2_right.png" alt="" />
		</div>
		<!-- Section 3 -- members card -->
		<div class="section3">
			<h2>founders</h2>
			<div class="card-container">
				<div class="card">
					<img src="assets/img/aboutpage/section3_chulinh.jpg" alt="John" style="max-width: 100%" />
					<h1>chu linh</h1>
					<p class="title">CEO & Founder</p>
					<p>HCMUE</p>
					<button>
						<a href="https://lynchou.github.io/linhchu4422/Untitled-1">More</a>
					</button>
				</div>
				<div class="card">
					<img src="assets/img/aboutpage/section3_phuong.jpg" alt="John" style="max-width: 100%" />
					<h1>thanh phuong</h1>
					<p class="title">CEO & Founder</p>
					<p>HCMUE</p>
					<button>
						<a href="https://tphuong00.github.io/phuong1147/MySite2">More</a>
					</button>
				</div>
				<div class="card">
					<img src="assets/img/aboutpage/section3_lavi.jpg" alt="John" style="max-width: 100%" />
					<h1>sar lavi</h1>
					<p class="title">Frontend Dev</p>
					<p>HCMUE</p>
					<button>
						<a href="https://lavisar.github.io/Introduce_MySelf/">More</a>
					</button>
				</div>
				<div class="card">
					<img src="assets/img/aboutpage/section3_thanh.jpg" alt="John" style="max-width: 100%" />
					<h1>viet thanh</h1>
					<p class="title">Backend Dev</p>
					<p>HCMUE</p>
					<button><a href="https://avataraand76.github.io/personal/">More</a></button>
				</div>
				<div class="card">
					<img src="assets/img/aboutpage/section3_quy.jpg" alt="John" style="max-width: 100%" />
					<h1>quy nguyen</h1>
					<p class="title">Tester</p>
					<p>HCMUE</p>
					<button>
						<a href="https://qynguyen.github.io/">More</a>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- MAIN CONTENT END -->

	<!-- FOOTER START -->
	<?php include "./Template/footer.html" ?>
	<!-- FOOTER END -->
</body>

</html>