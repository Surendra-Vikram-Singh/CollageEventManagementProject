<html>
<head>
	<title>Sign in</title>
	<script>
function validation()
{
    var result=true;
    var user=document.getElementById("user");
    if (user.value.trim().length<=3)
    return false;

 var pass=document.getElementById("pass");
    if(pass.value.length<=3)
    return false;

    return(result);
}       
	
	</script>
</head>
<Boby style="text-align:center; color: skyblue;">
	<h2><strong>Sign in</strong></h2>
	<hr/>
	<form method="POST">
		<label for="user"><b>USER:</b></label><br>
		<input type="text" id="user" name="user"/><br>

		<labe for="pass"><b>PASSWORD:</b></label><br>
		<input type="password" id="pass" name="pass"/><br><br>

		<input type="submit" value="SUBMIT" onclick="return validation()"><br>
	</form>

	<?php
	$user=$_POST["user"];
	$pass=$_POST['pass'];
	
	$user1="Surendra";
	$pass1="Password";

	if($user===$user1 && $pass===$pass1){
	echo "Successfull";
	}
	else{
	echo "Enter Correct username and password";
}
?>

</Boby>
</html>