<?php
 include 'db.php';
session_start();
if(isset($_POST['submit']))
{
	$uname=($_POST['uname']);
	$pass=($_POST['pass']);
	
	
	
	$sql="SELECT * FROM admin WHERE username='$uname' AND password='$pass'";
	//die("failed to query database".mysqli_error($conn));
	
	$result = mysqli_query($conn,$sql);

	$found_num_rows=mysqli_num_rows($result);
	echo $found_num_rows;
	       
			  if($found_num_rows==1)
			   {
				 echo $_SESSION['username']=$uname;
				  $_SESSION['password']=$pass;
				  $_SESSION['level']=$row['level'];
				  //($_SESSION['leve;']==user')
				  
				 // header("location:welcome.php?sucees=login suceesgul");
				  
			   }
			    

			   else
			   {
				  header("location:login.php ?invalid=user name or password are incorrect");
			   }
}

			   ?>

			  

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
	