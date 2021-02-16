<?php
include 'db.php';

	$id=$_POST['id'];
$ename=$_POST['ename'];
$culture=$_POST['culture'];
$title=$_POST['title'];
$sdate=$_POST['sdate'];
$ctime=$_POST['ctiming'];
$ldate=$_POST['ldate'];
$parti=$_POST['participate'];
	


$sql = "UPDATE eventpost SET id='$id',event='$ename',title='$title',cultural='$culture',sdate='$sdate',ctime='$ctime',ldate='$ldate',participate='$parti' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>