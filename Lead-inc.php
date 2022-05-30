<?php

include 'db.php';
//session_start();

$LeaderB = "SELECT user_uid, u_score  FROM userinfo ORDER by u_score DESC LIMIT 5";
$res = mysqli_query($conn, $LeaderB);
$result_length = mysqli_num_rows($res);
 
 echo "<table>";
    echo "<thead>";
	echo "<tr>";
	  echo  "<th = col>" . "Username" . "</th>";
       echo "<th = col>". "Level" . "</th>";
       	echo "</tr>";
             echo "</thead>"; 
   
for($i = 0; $i < $result_length; $i++)
{
	
    $row = mysqli_fetch_array($res);
    echo  "<tr>"."<th=row>" . "<td>".$row['user_uid'] . "\t" . "</td>". "</th>". "<th=row>" . "<td>". $row['u_score'] . "\n". "</td>"."</th>";
  
 }
   	  echo "</tr>";
      echo "</table>";
?>
