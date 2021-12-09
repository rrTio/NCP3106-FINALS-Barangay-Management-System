
function checkValidation() {
  var password = document.forms["officials"]["psswrd"];
  var cPassword = document.forms["officials"]["cPsswrd"];

  if (password.value != cPassword.value) {
    window.alert("PASSWORD MISMATCH");
    password.focus();
    cPassword.focus();
    password.value = "";
    cPassword.value = "";
    return false;
  }
}

function take_snapshot() {
  // take snapshot and get image data
  Webcam.snap(function (data_uri) {
    // display results in page

    Webcam.upload(data_uri, "database.php", function (code, text) {
      document.getElementById("imager").innerHTML =
        "<h2>Here is your image:</h2>" + '<img src="' + text + '"/>';
    });
  });
}
