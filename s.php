<?php
require 'db.php';
if(isset($_POST['submit']))
{
$collage=$_POST['collage'];
$organiser=$_POST['organiser'];
$ename=$_POST['ename'];
$sdate=$_POST['sdate'];
$ctime=$_POST['ctiming'];
$ldate=$_POST['ldate'];

// echo"$collage,$organiser,$ename,$sdate,$ctime,$ldate";
$sql1="SELECT `event` FROM `eventpost` WHERE 1";
$he=mysqli_query($conn,$sql1);
$dont=0;
while($she=mysqli_fetch_assoc($he))
{
    if ($ename==$she['event']) {
        echo '<script language="javascript">';
        echo 'alert("sorry! you cannot post a previously posted event")';
        echo '</script>';
		$dont=1;
		break;
    }
}
if ($dont!=1) {
    $sql="INSERT INTO eventpost(collage,organiser,event,sdate,ctime,ldate) 
	         VALUES('$collage','$organiser','$ename','$sdate','$ctime','$ldate')";
    
    if (mysqli_query($conn, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("registerd suceesfully")';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
}

?>
<a href="welcome.php">Go to post event page</a>