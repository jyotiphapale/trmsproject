var xmlHttp;
if(window.XMLHttpRequest)
{
var xmlHttp=new XMLHttpRequest();
}
else
{
http=new XMLHttpRequest();
}
function validate(name,pass)
{
http.abort();
http.open("GET","loginvalidate.php?name="+name,+pass,true);
http.onreadystatechange=function()
{
if(http.readyState == 4)
{
document.getElementById('uname').innerHTML=http.responseText;
document.getElementById('password').innerHTML=http.responseText;
}
}
http.send(null);
}

