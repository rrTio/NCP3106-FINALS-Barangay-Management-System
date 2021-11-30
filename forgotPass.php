<!DOCTYPE html>
<html lang="en" >
  <head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
    <title>Forgot Password</title>  
    <link rel="icon" href="./assets/images/logo.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="./assets/css/registerOfficial.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <script type="text/javascript" src="./assets/js/registerOfficial.js"></script>
  </head>
  <body>
  <div class="login">
    <h1>Forgot Password</h1>
    <form action="./database/database.php" method="post">

        <div class="form-floating">
            <input class="form-control form-control-lg" type="text" id="uName" name="uName" placeholder="" required>
            <label class="form-label" for="cPsswrd">USERNAME</label>
        </div>
        <div class="form-floating">
            <input class="form-control form-control-lg" type="password" id="newPsswrd" name="newPsswrd" placeholder="" required>
            <label class="form-label" for="newPsswrd">NEW PASSWORD</label>
        </div>
        <div class="form-floating">
            <input class="form-control form-control-lg" type="password" id="cNewPsswrd" name="cNewPsswrd" placeholder="" required>
            <label class="form-label" for="cNewPsswrd">CONFIRM NEW PASSWORD</label>
        </div>
        <button type="submit" name="btnChangePass" class="btn btn-primary btn-block btn-large">Enter</button>
    </form>
  </div>
  </body>
</html>