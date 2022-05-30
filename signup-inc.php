<?php

if (isset($_POST['submit'])) {

	include_once 'db.php';

	$user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
	$user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
	$user_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);

					//INSERT the user in database
					$sql = "INSERT INTO userinfo (user_email, user_uid, user_pass) VALUES ('$user_email', '$user_uid', '$user_pass');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php");
					exit();
				}