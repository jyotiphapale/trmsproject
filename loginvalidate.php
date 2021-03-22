<?php
include("conn.php");
$id=$_GET['tid'];
$name=$_GET['name'];
$sql="select tid from registration where tname=$name";
$result=mysqli_query($conn,$sql);
if($result == TRUE )
{
echo"hii";
}
else
{
echo"";
}
?>
