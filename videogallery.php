<?php
$fo=opendir("toupload");
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
echo"<video width='320' height='240' controls>
  <source src='movie.mp4' type='video/mp4'>
  Your browser does not support the video tag.
</video>";
//echo"<style>img{float:left;}</style>";
}
}
?>
