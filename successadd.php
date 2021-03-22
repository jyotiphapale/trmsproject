<html>
<head>
    <title>TRMS</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("conn.php");
 
if(isset($_POST['Submit'])) {    
    $tname = $_POST['tname'];
    $tquali = $_POST['tquali'];
	$tsub=$_POST['tsub'];
    $tadd = $_POST['tadd'];
        $tjdate = $_POST['tjdate'];
    // checking empty fields
    if(empty($tname) || empty($tquali) || empty($tsub) || empty($tadd) || empty($tjdate)) 
{                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($tquali)) {
            echo "<font color='red'>Qualification field is empty.</font><br/>";
        }
        
        if(empty($tsub)) {
            echo "<font color='red'>Subject field is empty.</font><br/>";
        }
        if(empty($tadd)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        }
if(empty($tjdate)) {
            echo "<font color='red'>JoiningDate field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)             
        //insert data to database
        $sql1 ="INSERT INTO addteacher(tname,tquali,tsub,tadd,tjdate) VALUES ('$tname','$tquali','$tsub','$tadd','$tjdate')";

if (@mysqli_query($conn,$sql1)==true)
{
 echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='indexvalidate.php'>View Result</a>";
}
else
{
echo"<br>Not inserted";
}
}
}

?>
</body>
</html>
