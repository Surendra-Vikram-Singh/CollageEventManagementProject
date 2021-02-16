<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        .show{
            margin:2%;
            height:70vh;
            width:70;
            text-align:center;
            background-color:grey;
            display:flex;
            flex-direction:ltr;
            padding:2%;
            border:1px solid black;
        }
        .heading{
            text-align:center;
            padding:1%;
            border-bottom:1px solid red;
        }
        </style>
    </head>
    <body>
    <h1 class="heading">NoticePage</h1>
    <h2>
        <?php
        // $myfile = fopen("./fileupload/notice1.txt", "r") or die("Unable to open file!");
        // ?>
        // <div class="show">
        // <?php
        // echo "*".fread($myfile, filesize("./fileupload/notice1.txt"));
        // fclose($myfile);
        ?>
        </h2>
        </div>


    </body>
</html> -->
<table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <!-- <td>File Type</td>
    <td>File Size(KB)</td> -->
    <td>View</td>
    </tr>
    <?php
    include 'db.php';
 $sql="SELECT * FROM notices";
 $result_set=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
<br>
<a href="home.php">GO TO HOME</a>

<td><?php //echo $row['type'] ?></td>
        <td><?php //echo $row['size'] ?></td>