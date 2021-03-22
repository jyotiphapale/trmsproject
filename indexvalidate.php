<?php
session_start();
@$_SESSION['username']=$_POST['username'];
@$_SESSION['password']=$_POST['upass'];
@include("conn.php");
if(count($_POST)>0) {
	$result = @mysqli_query($conn,"SELECT * FROM registration WHERE username='" . $_POST["username"] . "' and password = '". $_POST["upass"]."'");
	$count  = @mysqli_num_rows($result);
	if($count==0) {
		echo "<script>alert('Invalid Username or Password!');window.location='login.php';</script>";
return false;

	} else {
		echo "<script>alert('You are successfully authenticated!')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:limegreen;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
    li.sign
    {
        float: right;
    }
    h2
    {
        color:limegreen;
            font-size: 45px;
    }
</style>
</head>
<body style="background-image: url('img/img6.jpg');background-repeat: no-repeat;background-size:cover;opacity: 1;"> 
<form name="f" method="GET" action="add.php">
<center><h2>TRMS</h2></center>
<ul>
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PROFILE</a>
    <div class="dropdown-content">
      <a href="addteacher.html">ADD</a>
    </div>
 
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DOCUMENTS</a>
    <div class="dropdown-content">
      <a href="addprofdoc.php">PROFESSIONAL DOCUMENTS</a>
      <a href="addedudoc.php">EDUCATIONAL DOCUMENTS</a>
      <a href="addperdoc.php">PERSONAL DOCUMENTS</a>
    </div>
     <li><a href="seminar.html">SEMINAR</a></li>
    <li><a href="conferences.html">CONFERENCES</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">GALLERY</a>
    <div class="dropdown-content">
      <a href="image.php">IMAGES</a>
      <a href="video1.php">VIDEOS</a>
    </div>
        <li><a href="us.html">ABOUT US</a></li>
    <li class="sign"><a href="signout.php">SIGN OUT</a></li>
</ul>
<?php echo"<center><h2><marquee>Welcome\n\n".@$_SESSION["username"]."</marquee></h2></center>";?>
</form>

</body>
</html>
