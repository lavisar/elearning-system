<!DOCTYPE html>
<html lang="en">

<head>
	<title>CONTACT | Elearn - Online Learning Solution</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Header style -->
	<link rel="stylesheet" href="assets/Css/Header.css" />
	<!-- Footer style -->
	<link rel="stylesheet" href="assets/Css/Footer.css" />
	<!-- Main Style -->
	<link rel="stylesheet" href="assets/Css/Contact.css" />
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
	<div class="main-container">
		<div class="container">
			<div class="content">
				<div class="left-side">
					<div class="address details">
						<i class="fas fa-map-marker-alt"></i>
						<div class="topic">Address</div>
						<div class="text-one">
							District 5, <br />
							Ho Chi Minh City, VietNam
						</div>
					</div>
					<div class="phone details">
						<i class="fas fa-phone-alt"></i>
						<div class="topic">Phone</div>
						<div class="text-one">+123 456 789</div>
					</div>
					<div class="email details">
						<i class="fas fa-envelope"></i>
						<div class="topic">Email</div>
						<div class="text-one">contact.info@example.com</div>
					</div>
				</div>
				<div id="loaderId" class="right-side">
					<div class="topic-text">Send us a message</div>
					<h5>
						Please leave your information, we will contact you
						shortly!
					</h5>
					<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						// connect to the database
						$conn = mysqli_connect('localhost', '', '', 'elearndb');

						// check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// get form data
						$name = $_POST['name'];
						$email = $_POST['email'];
						$question = $_POST['question'];

						// insert data into the contact table
						$sql = "INSERT INTO contact (name, email, question) VALUES ('$name', '$email', '$question')";

						if ($conn->query($sql) === TRUE) {
							echo "<b>Send successfully!!!</b>";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}

						$conn->close();
					}
					?>
					<form id="form-contact" onsubmit="handleSubmit()" method="post">
						<div class="input-box">
							<input type="text" placeholder="Enter your name" name="name" required />
						</div>
						<div class="input-box">
							<input type="email" placeholder="Enter your email" name="email" required />
						</div>
						<div class="input-box">
							<input type="text" name="question" placeholder="Enter your question here" required />
						</div>
						<div class="input-box message-box"></div>
						<div class="button">
							<input type="submit" value="Send Now" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- MAIN CONTENT END -->

	<!-- FOOTER START -->
	<?php include "./Template/footer.html" ?>
	<!-- FOOTER END -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</html>