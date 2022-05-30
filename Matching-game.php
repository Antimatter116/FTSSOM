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
		<title>Matching Game</title>
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
							<h1><a href="gamespage.php" id="logo">Matching</a></h1>
							<p>Game</p>
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
										
										<script>
										    window.onload = function() {
										        var thegamelink = "Unity/Child--Game/index.php";
										        var ref = document.referrer;
										        var theurl = https:"Unity/Child--Game/index.php";
										        ref = ref.substring(ref.indexOf("://") + 3);
										        ref = ref.split("/")[0];
										        if(ref == "my-ga.me"){
										        theurl = "true"
										        } else {
										            theurl = "https://iskama.org/Unity/Child--Game/index.php"
										        } 
										        document.getElementById("embededGame").src = thegamelink+"/"+theurl+"?url="+window.location.href;
										    }
										</script>
										<div style="position: relative; height: 0; overflow: hidden; padding-bottom: 70.25%;"><iframe id="embededGame" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="Unity/Child--Game/index.php" frameborder="0" scrolling="no" seamless="seamless">Browser not compatible.</iframe></div>
										&nbsp;
						</div>
									</section>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
			<footer id="footer">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">
								<!-- About -->
									<section>
										<h2 class="major"><span>What to expect from ISKAMA</span></h2>
										<p>
											As a Student of APU, I Isa Sharif Khalaf will create a website that helps children's growth and help their parents by teaching them about manners.
										</p>
									</section>

							</div>
							<div class="col-12">

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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
