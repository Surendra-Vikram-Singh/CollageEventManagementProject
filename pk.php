<?php
include 'db.php';
 session_start();
	
	
	
	$sql="SELECT id,username,password from login";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
  {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row;
    }
       
  }

?>
