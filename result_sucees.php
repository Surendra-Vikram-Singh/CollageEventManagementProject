<html>
<body>
<bgcolor="blue">
</body>
</html>

<?php
session_start();
include 'db.php';
// require('adminSession.php');
if(isset($_POST['submit'])){
$email=$_POST['email'];
$name=$_POST['uname'];

$event=$_POST['ename'];
$st=$_POST['status'];
$reason=$_POST['reason'];

echo"$email,$name,$event,$st";

$sql="INSERT INTO result(email,name,event,status,reason)VALUES('$email','$name','$event','$st','$reason')";
		
	
if (mysqli_query($conn,$sql)){


echo '<script language="javascript">';
echo 'alert("registerd suceesfully")';
echo '</script>';

 	// header("location:result.php ? result=result added suceesfully");
	?> <a href="result.php">click here to go back</a><?php

}
elseif(mysqli_error($conn))
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo '<script language="javascript">';
	echo 'alert("Enter another registration number")';
	echo '</script>';
}
mysqli_close($conn);
}

?>