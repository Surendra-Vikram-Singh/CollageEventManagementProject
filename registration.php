<?php
session_start();
include 'db.php';


$email=$_POST['email'];
$name=$_POST['uname'];

$department=$_POST['dname'];
$collage=$_POST['cname'];
$pass=($_POST['pass']);
$cpass=($_POST['cpass']);


if(isset($_POST['submit']))
{
	if ($_POST["pass"] === $_POST["cpass"])
	{
   // success!
   
   
	}

else {
   // failed :
   echo "password not matched";
   exit();
}
	
	
	

	$sql="INSERT INTO register(email,name,department,collage,password,cpassword)
	     VALUES('$email','$name','$department','$collage','$pass','$cpass')";
		
// 		$sql1="INSERT INTO login(email,password)VALUES('$email','$pass')";
// }
		
//      mysqli_query($conn,$sql1);
	
if (mysqli_query($conn,$sql)) 
{
	$_SESSION['email']=$email;
	$_SESSION['uname']=$name;
	$_SESSION['password']=$pass;

echo"<div class='center'>";
echo '<h3>THANKS FOR THE REGISTERATION</h3>';
echo "<h3>YOUR USERNAME IS-".$_SESSION['email']."</h3>";
echo "<h3>PASSWORD IS-".$_SESSION['password']."</h3>";
echo 'click here <a href="login.php">lOG-IN</a>';
echo "</div>";

echo '<script language="javascript">';
echo 'alert("registerd suceesfully")';
echo '</script>';

} 
if(mysqli_error($conn))
{
	// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo '<script language="javascript">';
	echo 'alert("This is already registered")';
	echo '</script>';
	}
mysqli_close($conn);
}
?>
<style>
	.center{
		text-align:center;
	}
h3{
	color:red;
}
a
{
	color:red;
	font-size:20px;
}
</style>
<a href="register.php">Go to Registration page</a>


