<?php

session_start();
if(!$_SESSION['user_uid']) {
	header("Location: http://localhost/index.php");

	exit();

}?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://kit.fontawesome.com/cd8424e9cf.js" crossorigin="anonymous"></script>
		<title>Games</title>
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
							<p>Games</p>
						</div>
					</div>
				</header>
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="ilogin.php">Home</a></li>

						<li><a href="coursespage.php">Courses</a></li>
						<li class="current"><a href="cnav.php">Games</a></li>
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
															<a href="Matching-game.php" class="image featured"><img src="images/Chi.jpg" alt="" /></a>
															<h3><a href="Matching-game.php">🌟Matching Game</a></h3>
															<p>
																A fun Matching Game where you drag the spawns into their matching slots. Every playthrough will be different.
															</p>
														</section>
												
														<section class="boxfeature2">
															<a href="Game-template.php" class="image featured"><img src="images/minitower.jpg" alt="" /></a>
															<h3><a href="Game-template.php">Minimal Tower Defense</a></h3>
															<p>
																A simple game of tower defense(Score must be 2)
															</p>
														</section>

														<section class="boxfeature2">
															<a href="Mco.php" class="image featured"><img src="images/good-manners.jpg" alt="" /></a>
															<h3><a href="Mco.php">🌟Manners MC</a></h3>
															<p>
																a multiple choice game with based on a video at the intro.
																(completion will give levels)
															</p>
														</section>

														
												
														<section class="boxfeature2">
															<a href="humanbody-game.php" class="image featured"><img src="images/human-body.jpg" alt="" /></a>
															<h3><a href="#">Human Body</a></h3>
															<p>
																A fun Game that teachs you about mammamls and the human body
															</p>
														</section>
														<section class="boxfeature2">
															<a href="M10.php" class="image featured"><img src="images/good-manners.jpg" alt="" /></a>
															<h3><a href="M10.php">🌟Manners MC2</a></h3>
															<p>
																2 a multiple choice game with based on a video at the intro.
																(completion will give levels)
															</p>
														</section>


														<section class="boxfeature2">
															<a href="Reaction-game.php" class="image featured"><img src="images/reaction.jpg" alt="" /></a>
															<h3><a href="Reaction-game.php">Reaction!</a></h3>
															<p>
																A game that tests your reaction time.
															</p>
														</section>

														<section class="boxfeature2">
															<a href="ML.php" class="image featured"><img src="images/good-manners.jpg" alt="" /></a>
															<h3><a href="ML.php">🌟Manners MC3</a></h3>
															<p>
																3 a multiple choice game with based on a video at the intro.
																(completion will give levels)
															</p>
														</section>

														
														<section class="boxfeatureL">
															<a href="wars-game.php" class="image featured"><img src="images/Wars.jpg" alt="" /></a>
															<h3><a href="#">Galatic Wars</a></h3>
															<p>
																Shoot the aliens in space ( Z - To fire, arrow keys to move)
															</p>
														</section>

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