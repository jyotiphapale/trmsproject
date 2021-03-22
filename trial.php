<?php
include("conn.php");
$id=$_GET['tid'];
$name=$_GET['username'];
$sql="select tid from registration where tname='$name';"
$result=mysqli_query($conn,$sql);
if($result==$id)
{
echo"<html><body><form action=loginvalidate.php></form></body></html>";
}
else
{
echo"<html><body><form action=signup.php></form></body></html>";
}
?>
