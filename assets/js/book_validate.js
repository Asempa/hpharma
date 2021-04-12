function VerifyUser(){
    var Firstname = document.getElementById("First_name").value;



    if(Firstname===""){
        
        document.getElementById("First_Error").style.color="red";
        document.getElementById("First_Error").innerHTML="<strong>Field Empty. Please Fill<strong>";
        return true;
    }
    else{
        document.getElementById("First_Error").style.color="green";
        document.getElementById("First_Error").innerHTML="<strong>Valid<strong>";
        return false;
    }
}