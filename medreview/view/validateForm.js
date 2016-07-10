function loadPage(){
    document.getElementById('doctorName').focus();
    document.getElementById('invalidEmail').style.display = "none";
}

function valdiateDoctorReview() {
    alert('Thanks for your response!');
    return true;
}

function validateEmail() {
    var input = document.getElementByID('email');
    if (input == NULL || input == ""){
        document.getElementById('emailError').style.display = "block";
        return false;
    } else {
        document.getElementById('invalidEmail').style.display = "none";
        return true;
    }
}