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
		<title>Minimal Tower Defense</title>
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
							<h1><a href="gamespage.php" id="logo">Minimal</a></h1>
							<p>Tower Defense</p>
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
									<section class="container">
										
										<script>
											window.onload = function() {
											var thegamelink = "https://play.idevgames.co.uk/embed/minimal-tower-defense";
											var ref = document.referrer;
											var theurl = document.referrer;
											ref = ref.substring(ref.indexOf("://") + 3);
											ref = ref.split("/")[0];
											if(ref == "my-ga.me"){
											theurl = "true"
											} else {
											theurl = "false"
											} 
											document.getElementById("embededGame").src = thegamelink+"/"+theurl+"?url="+window.location.href;
											}
										</script>
										<div style="position: relative;height: 0;overflow: hidden;padding-bottom: 70.25%;">
											<iframe id="embededGame" src="https://play.idevgames.co.uk/embed/minimal-tower-defense" scrolling="no" seamless="seamless" frameBorder="0" style="position: absolute;top:0;left: 0;width: 100%;height: 100%;">Browser not compatible.</iframe>
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
