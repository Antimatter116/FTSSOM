<?php
session_start();
if (!isset($_SESSION['user_uid']) && !strstr($_SERVER['PHP_SELF'], "index.php")) 
{
  header("Location:index.php");
}

elseif(isset($_SESSION['user_uid'])) {
	header("Location: http://localhost/ilogin.php");

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
							<h1><a href="index.php" id="logo"><img src="images/ISKAMA.png" width="75" 
     height="75" /></a></h1>
							<!--<p>Where Children Grow Better</p>-->
						</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Home</a></li>
						<li class="forsign2" style="float: right;"><a href="login.php">Login</a></li>
						<li class="forsign" style="float: right;"><a href="signup.php">Sign Up</a></li>
					</ul>
				</nav>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						 
						

						<h2><div class="iconHover">
  					<span class="icon-gp">
  						<a href="Login.php"><img src="images/number3.png"/></a></span>
  					<span class="ftext">Login</span>
  				</div></h2><h2>Welcome to ISKAMA!</h2>
						<a href="signup.php" class="button scrolly">Sign Up Now!</a>
					</div>


				</section>
				<!-- score -->
				<section>

				<header id="header">
				<div>
							<h2 class="major">&nbsp&nbsp &nbsp&nbsp Highest Level Users<span></h2>
							</div>
				</header>
				
				<section>
					<body>
				<?php  include 'Lead-inc.php'?>
				<br>
			</body>
				</section>

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
