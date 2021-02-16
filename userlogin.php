<?php
session_start();
include 'db.php';
 
if(isset($_POST['submit']))
{
	
	
	// $_SESSION["start"]=time();
	// $_SESSION['expire']=$_SESSION['start']+(5*60);

	$email=($_POST['email']);
	$pass=($_POST['pass']);
	$_SESSION["email"]=$email;
	
	
	
	$sql="SELECT * FROM register WHERE email='$email' AND password='$pass'";
	//die("failed to query database".mysqli_error($conn));
	
	$result = mysqli_query($conn,$sql);

	$found_num_rows=mysqli_num_rows($result);
	$found_num_rows;
	       
			  if($found_num_rows==1)
			   {
				  echo $_SESSION['email']=$email;
				  $_SESSION['password']=$pass;
				   
				  header("location:participate.php?sucees=login suceesful");
				  
			   }
			   else
			   {
				  header("location:login.php ?invalid=user name or password are incorrect");
			   }
}
			   ?>

			  

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
	