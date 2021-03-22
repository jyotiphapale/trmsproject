<?php
session_start();
$id=$_SESSION['tid'];
// including the database connection file
include_once("conn.php");
$q="select * from addteacher where tid='".$id."'";
$result=@mysqli_query($conn,$q);
$row=@mysqli_fetch_assoc($result);
?>
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
<form name="myform" method="POST" action="edit1.php">
<fieldset>
<label>Update Record</label><br><br>
Teacher Id<br>
<input type="text" name="tid" value="<?php echo $row['tid'];?>"><br>
Teaher Name<br>
<input type="text" name="tname" value="<?php echo $row['tname'];?>"><br>
Teaher Qualification<br>
<input type="text" name="tquali" value="<?php echo $row['tquali'];?>"><br>
Teaher Subject<br>
<input type="text" name="tsub" value="<?php echo $row['tsub'];?>"><br>
Teaher Address<br>
<input type="text" name="tadd" value="<?php echo $row['tadd'];?>"><br>
Teaher Joining Date<br>
<input type="text" name="tjdate" value="<?php echo $row['tjdate'];?>"><br>

<input type="submit" name="submit" value="Update Record">
</fieldset>        
</form>



