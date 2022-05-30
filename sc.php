<?php

include 'db.php';
session_start();

$_SESSION['u_score'] = $_SESSION['u_score'] + intval(+1);
$score = $_SESSION['u_score'];
$level = "UPDATE userinfo SET u_score = '$score' WHERE user_uid = '{$_SESSION['user_uid']}'";

mysqli_query($conn, $level);
echo "<script>self.close();</script>";
exit();
?>



