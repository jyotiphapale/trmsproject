<title>TRMS:Add Data</title>
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
session_start();
@$_SESSION['tname']=$_POST['tname'];
@$_SESSION['tquali']=$_POST['tquali'];
@$_SESSION['tsub']=$_POST['tsub'];
@$_SESSION['tadd']=$_POST['tadd'];
@$_SESSION['tjdate']=$_POST['tjdate'];
@$_SESSION['tid']=$_POST['tid'];
//$Stname=$_SESSION('tname');
//including the database connection file
include_once("conn.php");
 
if(isset($_POST['Submit'])) {    
    $tname = $_POST['tname'];
    $tquali = $_POST['tquali'];
	$tsub=$_POST['tsub'];
    $tadd = $_POST['tadd'];
        $tjdate = $_POST['tjdate'];
	$tid=$_POST['tid'];
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
        $sql1 ="INSERT INTO addteacher(tid,tname,tquali,tsub,tadd,tjdate) VALUES ('$tid','$tname','$tquali','$tsub','$tadd','$tjdate')";

if (@mysqli_query($conn,$sql1)==true)
{
 echo "<font color='green'>Data added successfully.";
       echo "<br><a href='addteacher.html'>Go Back</a>";
}
else
{
echo"<br>Teacher Id is Present<br>Use another one";
}
}
}
$select = "SELECT * FROM addteacher ORDER BY tid desc";
if($result = mysqli_query($conn, $select)){
    if(mysqli_num_rows($result) > 0){
        echo "<table colspan='2' border='3' style='border-color:yellowgreen;color:yellowgreen;'>";
            echo "<tr>";
                echo "<th>Teacher Id</th>";
                echo "<th>Teacher Name</th>";
                echo "<th>Teacher Qualification</th>";
                echo "<th>Teacher Subject</th>";
		echo "<th>Teacher Address</th>";
		echo "<th>Teacher Joining Date</th>";
		echo "<th><strong>Edit</strong></th>";
		echo "<th><strong>Delete</strong></th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['tid'] . "</td>";
                echo "<td>" . $row['tname'] . "</td>";
                echo "<td>" . $row['tquali'] . "</td>";
                echo "<td>" . $row['tsub'] . "</td>";
		echo "<td>" . $row['tadd'] . "</td>";
		echo "<td>" . $row['tjdate'] . "</td>";
echo "<td align='center'>
<a href='edit.php'>Edit</a>";
echo"<td align='center'>
<a href='delete1.php'>Delete</a>
</td>";       
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


?>
<center><a href="addteacher.html">Go Back</a></center>
</fieldset>
