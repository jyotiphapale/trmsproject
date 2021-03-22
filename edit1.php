<title>TRMS:Edit Data</title>
<style>
h1
{
font-style:bold;
text-align:center;
    color:greenyellow;
}
fieldset
    {
	width:50%;
	height:auto%;
        margin-left:300px;
        margin-right:0px;
        text-align: center;
        border-width:25 px;
	border-style:solid;
	border-color:yellowgreen;
    }
</style>
<fieldset>
<h1>TRMS</h1>
<?php
if(isset($_POST['submit']))
{
$tid=$_POST['tid'];
$tname=$_POST['tname'];
$tquali=$_POST['tquali'];
$tsub=$_POST['tsub'];
$tadd=$_POST['tadd'];
$tjdate=$_POST['tjdate'];
include("conn.php");
$sql="update addteacher set tname='".$tname."',
tquali='".$tquali."', tsub='".$tsub."',
tadd='".$tadd."',tjdate='".$tjdate."' where tid='".$tid."'";
if(@mysqli_query($conn, $sql)==TRUE)
{
echo "Record Updated Successfully.";
$select = "SELECT * FROM addteacher ORDER BY tid desc";
if($result = mysqli_query($conn, $select)){
    if(mysqli_num_rows($result) > 0){
        echo "<table colspan='2' border='3' style='border-color:yellowgreen;color:black;'>";
            echo "<tr>";
                echo "<th>Teacher Id</th>";
                echo "<th>Teacher Name</th>";
                echo "<th>Teacher Qualification</th>";
                echo "<th>Teacher Subject</th>";
		echo "<th>Teacher Address</th>";
		echo "<th>Teacher Joining Date</th>";
                echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['tid'] . "</td>";
                echo "<td>" . $row['tname'] . "</td>";
                echo "<td>" . $row['tquali'] . "</td>";
                echo "<td>" . $row['tsub'] . "</td>";
		echo "<td>" . $row['tadd'] . "</td>";
		echo "<td>" . $row['tjdate'] . "</td>";
	echo "</tr>";
}
        echo "</table>";
        // Free result set
       
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);
}
}
}
?>
<center><h2><a href="add.php">Go Back</a></h2></center>
</fieldset>

