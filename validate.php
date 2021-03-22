<?php
function validate($name)
{

if($name=='')
{
return '<body><h4>* Please Enter Any Username</h4><style>h4{color:red;}</style></body>';
}
if(strlen($name)<3)
{
return '<body><h4>* Username is too short</h4><style>h4{color:red;}</style></body>';
}
switch($name)
{
case 'xyz';
case 'abc';
case 'pqr';
return "<body><h4>* Username already Exists</h4><style>h4{color:red;}</style></body>";
}
return "<body><h4>* Username is valid</h4><style>h4{color:green;}</style></body>";
}
echo validate(trim($_REQUEST["name"]));
?>
