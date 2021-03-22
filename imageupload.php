<?php
include("conn.php");

if(isset($_POST['upd']))
{
$upd=$_POST['upd'];
echo $upd;
if(file_exists("toupload/".$_FILES['file']['name']))
{
echo "<font color='red'>".$_FILES['file']['name']."already exists</font>";
}
else
{
$supported_image=array('png','jpg','gif','jpeg');
$src_file_name=$_FILES['file']['name'];
$ext=strtolower(pathinfo($src_file_name,PATHINFO_EXTENSION));
if(in_array($ext,$supported_image))
{
move_uploaded_file($_FILES['file']['tmp_name'],"toupload/".$_FILES['file']['name']);
echo $_FILES['file']['name']."<br><br>Image Uploaded";

}else
{
echo"<font color='red'>Please choose a valid image</font>";
}}}

?>
<br><br><br>
<html>
<head>
<style>



</style>
<form method="POST" enctype="multipart/form-data">
<label>choose your image</lable><br><input type="file" name="file"/><br><br>
<input type="submit" value="Upload Image" name="upd"/>
</form>
</html>
