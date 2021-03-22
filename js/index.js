   
    function validatelogin()
{ var email=document.getElementById("u").value;
  var pass=document.getElementById("p").value;
 
    if(email==null || email=="")
        {
            alert("Email Id Cannot be Left Blank");
        }
    else if(pass.length<3)
        {
            alert("Password Should Contain Minimum 3 characters");
        }
 else{
     window.location="dashboard.html";
 }
}
 /*function home()
{
    
    //var b1=document.getElementById("home").value;
    //window.location="index.html";
    document.write("Hellow Jyoti");
}*/
