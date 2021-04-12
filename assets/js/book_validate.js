
function VerifyFname(){
    var Firstname = document.getElementById("First_name").value;

    if(Firstname==="" || !regex_name(Firstname)){

        document.getElementById("First_name").style.borderColor="#e74c3c";
        return true;
    }

    else{
        document.getElementById("First_name").style.borderColor="#2ecc71";
        return false;
    }
}

function VerifyLname(){
    var Lastname = document.getElementById("Last_name").value;

    if(Lastname==="" || !regex_name(Lastname)){

        document.getElementById("Last_name").style.borderColor="#e74c3c";
        return true;
    }

    else{
        document.getElementById("Last_name").style.borderColor="#2ecc71";
        return false;
    }
}


function regex_name(name){
    return /^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/.test(name);
}

function VerifyEmail(){
    var Email = document.getElementById("Email").value;

    if(Email==="" || !email_regex(Email)){

        document.getElementById("Email").style.borderColor="#e74c3c";
        return true;
    }

    else{
        document.getElementById("Email").style.borderColor="#2ecc71";
        return false;
    }
}

function email_regex(name){
    return /([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com/.test(name);
}
