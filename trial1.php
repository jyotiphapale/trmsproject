<html>
<body>
<form method="POST">
enter username
<input type=text name="username">
Enter Password
<input type=password name="password">
<input type=submit value=submit>
</form>
</body>
</html>

<?php 
session_start();

$Username= $_POST['username'];
$Password= $_POST['password'];

include("conn.php");

$select1 = "SELECT * FROM registration WHERE username='$Username' and password='$Password'"; 

$result1 = @mysqli_query($select1);

if (!$result1)
{
	die('Could not connect:'.mysql_error());
}

$num1 = @mysql_num_rows($result1); 

if ($num1 == 0)
{
	@mysqli_close($con);
}

elseif ($num1 > 0)
{
	$row = @mysqli_fetch_row($result1);
	$Username = $row[0];

	$select2 = "SELECT * FROM registration WHERE username='$Username'"; 
	$result2 = @mysqli_query($select2);

	if (!$result2)
	{
		die('Could not connect:'.@mysqli_error());
	}

	$row2 = @mysqli_fetch_row($result2);
	$username = $row2[1];

	$_SESSION['logname'] = $Username;
	mysqli_close($con);
	header("Location: indexvalidate.php");
}
?>

