<?php

session_start();
if(!$_SESSION['user_uid']) {
	header("Location: http://localhost/index.php");

	exit();

}

//if(empty($user_uid) || empty($user_pass)) {
	//header("Location: http://localhost/index.php")
?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://kit.fontawesome.com/cd8424e9cf.js" crossorigin="anonymous"></script>
		<title>Courses</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="body1">
		<div id="wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="ilogin.php" id="logo">ISKAMA</a></h1>
							<p>Courses</p>
						</div>
					</div>
				</header>
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="ilogin.php">Home</a></li>

						<li class="current"><a href="coursespage.php">Courses</a></li>
						<li><a href="cnav.php">Games</a></li>
						<li class="forsign" style="float: right;"><a href="index.php">Sign Out</a></li>
						<?php 
						if($_SESSION['u_score'] == 0) {

							echo "<p style='color:white; float: right;'>" . "<span>Login As : </span>" .$_SESSION['user_uid']. '</br>' . "<span>Current Level: </span>" . $_SESSION['u_score']."</p>";
							echo "<img style='float: right; padding-top:15px;padding-right:10px;'' src='images/new.png'>";
						}
						elseif($_SESSION['u_score'] == 1) {
							echo "<p style='color:white; float: right;'>"  . "<span>Login As : </span>" .$_SESSION['user_uid']. '</br>' . "<span>Current Level: </span>" . $_SESSION['u_score']."</p>";
							echo "<img style='float: right; padding-top:15px;padding-right:10px;'' src='images/number1.png'>";
						}
							
						elseif($_SESSION['u_score'] == 2) {
							echo "<p style='color:white; float: right;'>" . "<span>Login As : </span>" .$_SESSION['user_uid']. '</br>' . "<span>Current Level: </span>" . $_SESSION['u_score']."</p>";
							echo "<img style='float: right; padding-top:15px;padding-right:10px;'' src='images/number2.png'>";
						}
						elseif($_SESSION['u_score'] >= 3) {
							echo "<p style='color:white; float: right;'>" . "<span>Login As : </span>" .$_SESSION['user_uid']. '</br>' . "<span>Current Level: </span>" . $_SESSION['u_score']."</p>";
							echo "<img style='float: right; padding-top:15px;padding-right:10px;'' src='images/number3.png'>";
						}

						else{
							echo "<p style='color:white; float: right;'>"  . "<span>Login As : </span>" .$_SESSION['user_uid']. '</br>' . "<span>Current Level: </span>" . $_SESSION['u_score']."</p>";
						}
						
						?>
						
					</ul>
				</nav>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							

								<!-- Features -->
									<section class="boxfeaturesmain">
										
										<div>
											<div class="row">
											
														<section class="boxfeature1">
															<a href="Course-template.php" class="image featured"><img src="images/good.png" alt="" /></a>
															<h3><a href="Course-template.php">Learn good manners for kids</a></h3>
															<p>
																Basic good manners for kids
															</p>
														</section>

												
														<section class="boxfeature2">
															<a href="Room.php" class="image featured"><img src="images/gg.jpg" alt="" /></a>
															<h3><a href="Room.php">Why to keep your room clean</a></h3>
															<p>
																join us as we go through some reasons to keep your room clean.
															</p>
														</section>

												
														<section class="boxfeature3">
															<a href="familye.php" class="image featured"><img src="images/fam.jpg" alt="" /></a>
															<h3><a href="familye.php">Family Education</a></h3>
															<p>
																Join us as we go through some manners to exercise at home.
															</p>
														</section>

												
														<section class="boxfeature4">
															<a href="essentialman.php" class="image featured"><img src="images/Capturecoo.jpg" alt="" /></a>
															<h3><a href="essentialman.php">10 Essential Manners</a></h3>
															<p>
																Join us as we go through 10 essentail manners to have.
															</p>
														</section>

												
														<section class="boxfeature5">
															<a href="onbus.php" class="image featured"><img src="images/bus.jpg" alt="" /></a>
															<h3><a href="onbus.php">Good manners on the bus</a></h3>
															<p>
																Join our friends as they go through a bus ride.
															</p>
														</section>

												
												
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<footer id="footer">
					<div class="container">
								<!-- About -->
									<section>
										<h2 class="major"><span>What to expect from ISKAMA</span></h2>
										<p>
											As a Student of APU, I Isa Sharif Khalaf will create a website that helps children's growth and help their parents by teaching them about manners.
										</p>
									</section>

							</div>

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Our Socials</span></h2>
										<ul class="contact">
											<li><a class="fab fa-facebook-square" href="#"></a></li>
											<li><a class="fab fa-instagram" href="#"></a></li>
											<li><a class="fab fa-linkedin" href="#"></a></li>
										</ul>
									</section>
							</div>
						</div>
					</div>
				</footer>
		</div>
	</body>
</html>
