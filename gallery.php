<title>TRMS:Gallery</title>
<!DOCTYPE HTML>
<?php
$fo=opendir("toupload");
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
echo"<img src='toupload/$file' width='200px' style='display:block;margin-right:0px;border-style:solid;' height='200px' class='img' id='img' onmouseover='big1(this)' onmouseout='small1(this)'/>";
//echo"<style>img{float:left;}</style>";
}
}
?>
<head>
<script>
function img1()
{
document.getElementById("d").innerHTML="<img src=toupload/$file onmouseover=big1(this) onmouseout=small1(this)>";
}
function big1(t)
{
t.style.height="500px";
t.style.width="500px";
}
function small1(t)
{
t.style.height="200px";
t.style.width="200px";
}
</script>
<style>
.img {
  float: left;
  width: 33.33%;
  padding: 20px;
}
.img::after {
  content: "";
  clear: both;
  display: table;
}
<br><div id="d" class="d"></div>
</head>
</html>
