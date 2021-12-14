mysqli_close($conn);
function checkPosition() { 
    var getPosition = document.forms["viewUser"]["getPosition"];
    var civilStatus = document.getElementById("cStatus");
    var position = document.getElementById("brgyPosition");
    var cityAddress = document.getElementById("cityAdd");
    var provincialAddress = document.getElementById("provAdd");
    var purok = document.getElementById("purok");
    var mobileNum1 = document.getElementById("mNumOne");
    var mobileNum2 = document.getElementById("mNumTwo");
    var homeNum1 = document.getElementById("hNumOne");
    var homeNum2 = document.getElementById("hNumTwo");
    var username = document.getElementById("uName");
    var email = document.getElementById("email");
    var password = document.getElementById("psswrd");
    var cPassword = document.getElementById("cPsswrd");
    var button = document.getElementById("saveEdit");

    if (getPosition.value == "Kagawad") {
        civilStatus.disabled = true;
        position.disabled = true;
        cityAddress.disabled = true;
        provincialAddress.disabled = true;
        purok.disabled = true;
        mobileNum1.disabled = true;
        mobileNum2.disabled = true;
        homeNum1.disabled = true;
        homeNum2.disabled = true;
        username.disabled = true;
        email.disabled = true;
        password.disabled = true;
        cPassword.disabled = true;
        button.style.display = "none";
    }
}