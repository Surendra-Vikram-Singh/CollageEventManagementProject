<?php
session_start();
$emaili=$_SESSION["uname"];
if(!isset($_SESSION["uname"])){
	echo"Please Login Again";
	echo"<a href='adminlogin.php'>Click Here To Login.</a>";
}
else{
	$now=time();
	if($now>$_SESSION['expire']){
	  session_destroy();
	  echo "Your Session has Expired! <a href='adminlogin.php'>Click Here To Login.</a>";
	}
}
?>