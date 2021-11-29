
function checkValidation() { 
    var password = document.forms['officials']['psswrd'];
    var cPassword = document.forms['officials']['cPsswrd'];

    if (password.value != cPassword.value) { 
        window.alert("PASSWORD MISMATCH")
        password.focus();
        cPassword.focus();
        password.value = "";
        cPassword.value = "";
        return false;
    }
}