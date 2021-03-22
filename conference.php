<?php
include('conn.php');
$type=$_POST['doc'];
$topic=$_POST['topic'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$time=$_POST['time'];
$sql1 = "INSERT INTO conf values('$type','$topic','$venue','$date','$time')";

if (@mysqli_query($conn,$sql1)== TRUE)
{
 echo"Data Saved";
}
else
{
echo"<br>Not inserted";
}
