
function VerifyFname(){
    var Firstname = document.getElementById("First_name").value;

    if(Firstname==="" || !regex_name(Firstname)){

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

    if(Lastname==="" || !regex_name(Lastname)){

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


function regex_name(name){
    return /^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/.test(name);
}

function VerifyEmail(){
    var Email = document.getElementById("Email").value;

    if(Email==="" || !email_regex(Email)){

        document.getElementById("Email_Error").style.color="red";
        document.getElementById("Email_Error").innerHTML="<strong>Field Empty. Please Fill<strong>";
        return true;
    }

    else{
        document.getElementById("Email_Error").style.color="green";
        document.getElementById("Email_Error").innerHTML="<strong>Valid<strong>";
        return false;
    }
}

function email_regex(name){
    return /([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com/.test(name);
}
