<?php
$host='localhost';
$user = 'ty18';
$password = '';
$db = 'tydb18';
$conn =@mysqli_connect($host, $user, $password, $db);

if ($conn==null) 
{
  echo"Connection Failed";
}
else
{
echo "";
}
$sql1 = "INSERT INTO registration values('','xyz','xyz','7083005903','123456')";

if (@mysqli_query($conn,$sql1)== TRUE)
{
 echo"";
}
else
{
echo"<br>Not inserted";
}


?>
