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
		<title>Keep your room clean- Good habits & manners</title>
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
							<h1><a href="coursespage.php" id="logo">Learn</a></h1>
							<p>Keep your room clean- Good habits & manners</p>
						</div>
					</div>
				</header>
			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="ilogin.php">Home</a></li>

						<li><a href="coursespage.php">Courses</a></li>
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
									<section class="container">
									
										
												<div class="videoloc">
												<video id="video1" class="video" width="1120" height="900" src="..\videos\roomclean.mp4" type='video/mp4' / controls>
													
												</video>
												</div>
											
												
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
