function goBack(){
    window.history.back();
}

function validateFormreg(){
    const username = document.forms["registration"]["username"].value;
    const password = document.forms["registration"]["password"].value;
    const confirmPassword=document.forms["registration"]["confirmPassword"].value;
    const gender = document.forms["registration"]["gender"].value;
    const dob = document.forms["registration"]["dob"].value;
    const phone = document.forms["registration"]["phone"].value;
    
    const phoneRegex = /^[0-9]{10}$/;

    if(username=="" || password=="" || confirmPassword=="" || gender=="" || dob=="" || phone ==""){
        alert("Please fill in all fields");
        return false;
    }

    if(password!==confirmPassword){
        alert("Password do not match");
        return false;
    }

    if(!phone.match(phoneRegex)){
        alert("Please enter a valid phone number");
        return false;
    }
    if(!validateDob(dob)){
        alert("Please select a valid date of birth");
        return false;
    }
 return true;
}

function validateDob(dob){
    const selectedYear = new Date(dob).getFullYear();
    if(selectedYear >=2022){
        return false;
    }
    return true;
}

function validateFormlogin(){
    const username=document.forms["login"]["username"].value;
    const password=document.forms["login"]["password"].value;

    if(username=="" || password==""){
        alert("Please fill in all fields");
        return false;
    }

}