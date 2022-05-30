<?php

session_start();
if(!$_SESSION['user_uid']) {
	header("Location: http://localhost/index.php");
	//if($_SESSION['Score'] = 2) {
	//header("Location: http://localhost/");
	exit();

}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<title>Childrens Mannerisms - Educting The Young</title>
		<script src="https://kit.fontawesome.com/cd8424e9cf.js" crossorigin="anonymous"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


	</head>

	<body class="body1">
		<div id="wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a href="ilogin.php" id="logo"><img src="images/ISKAMA.png" width="75" 
     height="75" /></a></h1>
							
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="ilogin.php">Home</a></li>
						<li><a href="coursespage.php">Courses</a></li>
						<li><a href="cnav.php">Games</a></li>
						<li class="forsign" style="float: right;"><a href="signout.php">Sign Out</a></li>
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

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<h2>Welcome to ISKAMA!</h2>
						
					</div>
				</section>
				<!-- score -->
				<section>

				<header id="header">
				<div>

							<h2 class="major">&nbsp&nbsp &nbsp&nbsp Highest Level Users<span></h2>
							</div>
				</header>
				<?php  include 'Lead-inc.php'?>
				<br>

				</header>
			</section>
		

			<!-- Main -->
				<section id="main">
					<div class="container">


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