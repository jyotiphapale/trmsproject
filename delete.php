<title>TRMS:Delete Data</title>
<style>
h1
{
font-style:bold;
text-align:center;
    color:greenyellow;
}
textarea[name=tadd],select[name=tsub],select[name=tquali],input[type=text],input[type=password],input[type=email],input[type=tel],input[type=file],input[type=date]{
width: 500px;
height: auto;
padding: 10px;
margin-bottom: 25px;
margin-top: 5px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
}
fieldset
    {
	width:50%;
	height:auto;
        margin-left:300px;
        margin-right:0px;
        text-align: center;
        border-width:25 px;
	border-style:solid;
	border-color:yellowgreen;
    }
div.left
{
float:center;
margin-left:200px;
border-style:none;
}
</style>
<h1>TRMS</h1>
<fieldset>
<?php
if(isset($_POST['submit']))
{
$id=$_POST['tid'];
include("conn.php");
$sql="DELETE FROM addteacher WHERE tid='".$id."'";
if(@mysqli_query($conn, $sql)==TRUE)
{
echo "Record Deleted Successfully.";
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
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);
}
}
}
?>
<center><h2><a href="indexvalidate.php">Go Back on Homepage</a></h2></center>
</fieldset>
