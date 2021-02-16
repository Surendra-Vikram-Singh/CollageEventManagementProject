<?php

$_SESSION['email']=$_POST['email'];
$email=$_SESSION["email"];
if(!isset($_SESSION["email"])){
	echo"Please Login Again";
	echo"<a href='login.php'>Click Here To Login.</a>";
	// header('location:home.php');?>
	<meta http-equiv="refresh" content="3;url=login.php" />
	<?php
}
// else{
// 	$now=time();
// 	if($now>$_SESSION['expire']){
// 	  session_destroy();
// 	  echo "Your Session has Expired! <a href='login.php'>Click Here To Login.</a>";
// 	}
// }
?>