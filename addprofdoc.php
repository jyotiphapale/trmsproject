
<html>
<head>
<style>
h1
{
font-style:bold;
text-align:center;
    color:greenyellow;
}
textarea[name=tadd],select[name=tsub],select[name=doc],input[type=text],input[type=password],input[type=email],input[type=tel],input[type=file],input[type=date]{
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
</head>

<body>

<br><br>
<form action="uploaddoc.php" method="post" enctype="multipart/form-data">
<fieldset>
    <h1>TRMS</h1>
<label>Select Professional Document Category</label><br>
<select name="doc" id="doc" required>
<option value="certificates">Certificates</option>
<option value="test result">Test Result</option>
<option value="Attendence sheets">Attendence Sheets</option>
<input type="file" name="file">
</select><br>
<input type="submit" name="submit" value="Upload">
</fieldset>
</form>
<body>
</html>

