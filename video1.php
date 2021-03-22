<html>
<head>
<style>
h1
{
font-style:bold;
text-align:center;
    color:greenyellow;
}
input[type=text],input[type=file],input[type=date]{
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
	width:80%;
	height:auto;
        margin-left:150px;
        margin-right:0px;
        text-align: center;
        border-width:25 px;
	border-style:solid;
	border-color:yellowgreen;
background-color:aliceblue;
    }
div.left
{
float:center;
margin-left:200px;
border-style:none;
}
</style>
</head>
<body>
<fieldset>
    <h1>TRMS</h1>

<a href="video1.php?option=upload" style="margin-left:0px">Upload
Video</a>
<a href="video1.php?option=display" style="margin-left:0px">Video
Gallery</a>
<br><br>
<?php
@$gall=$_GET['option'];
switch($gall)
{
case 'upload';
include('video.php');
break;
case 'display';
include('videogallery.php');
break;
}
?>
<br>
<a href="indexvalidate.php">Go Back on Homepage</a>
</html>
