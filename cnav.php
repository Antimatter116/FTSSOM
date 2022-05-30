<?php

session_start();

if(!$_SESSION['user_uid']) {
	header("Location: http://localhost/index.php");}
	elseif($_SESSION['u_score'] == 0) {
	header("Location: http://localhost/gamespage1.php");}
	elseif($_SESSION['u_score'] == 1) {
	header("Location: http://localhost/gamespage2.php");}
	elseif($_SESSION['u_score'] == 2) {
	header("Location: http://localhost/gamespage3.php");}
	elseif($_SESSION['u_score'] >= 3) {
	header("Location: http://localhost/gamespage.php");}
	else{
	header("Location: http://localhost/ilogin.php");}
	exit();



?>