function VerifyFname(){
    var Firstname = document.getElementById("First_name").value;

    if(Firstname==="" ){
        
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

function VerifyLname(){
    var Lastname = document.getElementById("Last_name").value;

    if(Lastname==="" ){
        
        document.getElementById("Last_Error").style.color="red";
        document.getElementById("Last_Error").innerHTML="<strong>Field Empty. Please Fill<strong>";
        return true;
    }

    else{
        document.getElementById("Last_Error").style.color="green";
        document.getElementById("Last_Error").innerHTML="<strong>Valid<strong>";
        return false;
    }
}