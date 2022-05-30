<?php


if (isset($_POST['submit'])) {
	include 'db.php';

	$user_uid = mysqli_real_escape_string($conn, $_POST['user_uid']);
	$user_pass = mysqli_real_escape_string($conn, $_POST['user_pass']);

	//Error checking
	//Check if input is empty

	if(empty($user_uid) || empty($user_pass)) {
			header("Location: http://localhost/login.php?=empty1");
			exit();
	}else{
		$sql = "SELECT * FROM userinfo WHERE (user_uid='$user_uid' OR user_email='$user_uid') AND user_pass='$user_pass'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
			header("Location: http://localhost/login.php?=error1");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
					//login user code
				session_start();
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['user_uid'] = $row['user_uid'];
					$_SESSION['user_pass'] = $row['user_pass'];
					$_SESSION['u_score'] = $row['u_score'];
					header("Location: http://localhost/ilogin.php");
					exit();
				}
			}
		}
	}
 else {
	header("Location: http://localhost/login.php?=error");
	exit();
}