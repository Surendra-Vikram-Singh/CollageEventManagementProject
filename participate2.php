<?php
include 'db.php';
$sql="SELECT * from eventpost";
// echo "<br>".var_dump($sql);
$result=mysqli_query($conn,$sql);
// echo "<br>".var_dump($result);
while($row=mysqli_fetch_array($result));
{
    echo "<br>".$row['event'];
}
// foreach($row as $item)
// {
//     echo $item." ";
// }