<!DOCTYPE HTML>
<html>
<head>
<script>
var http=false;
if(navigator.appName=="Microsoft")
{
http=new ActiveXObject("Microsoft.XMLHTTP");
}
else
{
http=new XMLHttpRequest();
}
function validate(username)
{
http.abort();
http.open("GET","validate.php?name="+username,true);
http.onreadystatechange=function()
{
if(http.readyState == 4)
{
document.getElementById('demo').innerHTML=http.responseText;
}
}
http.send(null);
}
</script>
<style>
/* Below line is used for online Google font */
@import url(http://fonts.googleapis.com/css?family=Raleway);
h1{
    text-align: center;
    font-family:fantasy;
    font-display: block;
    font-size: 45px;
    color:greenyellow;
}
h2{
background-color: #FEFFED;
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}
hr{
margin: 10px -50px;
border: 0;
border-top: 1px solid #ccc;
margin-bottom: 40px;
}
div.container{
width:50%;
height:50%;
font-family: 'Raleway', sans-serif;
display:table;
    background-size: cover;
    margin:auto;

}
div.main{
    float: none;
width: 70%;
height:auto;
font-family: 'raleway',sans-serif;
	border-style:solid;
	border-color:lightskyblue;
	border-width:0px;
	
	background-color:aliceblue;
	text-decoration-color: blueviolet;
	    opacity: 1;
	    display:inline-block;
	    
	    
    
}
div.image{
    width: 150%;
    height: 150%;
}

input[type=text],input[type=password]{
width: 75%;
height: auto;
padding: 10px;
border: 2px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
float:center;
margin-right:30px;
margin-left:30px;
}
input[type=submit]{
width:75%;
font-size: 16px;
background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width:75%;
padding: 10px 0;
outline:none;
margin-right:30px;
margin-left:30px;
margin-bottom:20px;

}
label{
color: #464646;
text-shadow: 0 1px 0 #fff;
font-size: 14px;
font-weight: bold;
margin-right:30px;
margin-left:30px;
}
input[type=button]:hover{
background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
fieldset{
            height: auto;
		width:75%;
            }
</style>
</head>
<title>TRMS:Login</title>
<body style="background-image: url('img/img6.jpg');background-repeat: no-repeat;background-size:cover;opacity: 1;"> 
<form name="myform" method="POST" action="indexvalidate.php">
<div class="container">
    <div class="main">
        <h1>TRMS</h1>
<label>Username</label><br>
<input type="text" name="username" id="username" onkeyup="validate(this.value)" required/><br>
<div id="demo"></div>
<label>Password </label><br>
<input type="password" name="upass" id="upass" required/><br><br>
<div id="password"></div>
<input type="submit" value="Login" name="submit"/><br></br>
<a href="register.php">click here to Register</a>
</div>
</div>
</body>
</form>
</html>
<?php
include('conn.php');
@$username=$_POST['username'];
@$email=$_POST['email'];
@$mob=$_POST['no'];
@$password=$_POST['password'];
$sql1 = "INSERT INTO registration values('','$username','$email','$mob','$password')";

if (@mysqli_query($conn,$sql1)== TRUE)
{
 echo"";
}
else
{
echo"<br>Warning:Value not Inserted";
}
