<html>
<head>
<title></title>
</head>
<body>
	<form method="POST" Action="<?php echo $_SERVER["PHP_SELF"];?>">
	<label>ID: </label><br>
	<input type="number" name="id"/><br>

	<label>Name: </label><br>
	<input type="text" name="user"/><br>

	<label>Password: </label><br>
	<input type="password" name="pass"/><br>

	<label>class </label><br>
	<input type="text" name="class"/><br>

	<input type="submit" name="submit" value="submit"/><br>
</form>
<?php 
$id=$_POST['id'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$class=$_POST['class'];
echo"name".$user;
if(isset($_REQUEST['submit'])){
	$con=mysqli_connect('localhost','root','surendra@12');
	$db=mysqli_select_db($con,'quiz');
	if(!$con){
		die ("Could not Connect:".mysqli_Connect_Error());
	}
else{
	echo"Connection Successful";
}
$sql="insert into user"."(id,name,pass,class)"."values('$id','$user','$pass','$class')";
if(mysqli_master_query($con,$sql)){
	echo"Record insert Succeefully";
}
else{
	echo "Could not insert Record".mysqli_error($con);
}
}
?>
</body>
</html>