<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="./assets/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="./assets/js/index.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="login">
    <h1>Login</h1>
    <form action="./database/database.php" method="post">
        <input type="text" name="username" placeholder="Username or Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" name="btnLogin" class="btn btn-primary btn-block btn-large">Enter</button>
        <center class="marginButton">
          <a id="forgotPassword" onClick="return forgotPassword()">Forgot password?</a>
        </center>
        
      </form>
  </div>
  </body>
</html>