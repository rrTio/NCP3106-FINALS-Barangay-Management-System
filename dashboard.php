<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./assets/css/dashboard.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<html>
  <head>
 
  </head>
  <body>
      <div class="container mt-3 containerCard">
        <div class="row">
          <div class="col-lg-4 cardLayout">
            <div class="card">
              <div class="total">
                <h4>TOTAL RESIDENTS</h4>
                <div class="content">
                  <p>24</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 cardLayout">
            <div class="card">
              <div class="gender">
                <h4>GENDER</h4>
                <div class="content">
                  <p id="gender">MALE &nbsp; &nbsp; FEMALE<br>12 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 12</p>
                </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 cardLayout">
            <div class="card">
              <div class="voter">
                <h4>TOTAL VOTERS</h4>
                <div class="content">
                  <p>24</p>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="main-menu">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-list fa-2x"></i>
                    <span class="nav-text">
                        Resident Information
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span class="nav-text">
                        Register Resident
                    </span>
                </a>
                
            </li>
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="nav-text">
                        Accounts
                    </span>
                </a>
                
            </li>
            
        </ul>
        <ul class="logout">
            <li>
                <a href="#">
                      <i class="fa fa-power-off fa-2x"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>  
        </ul>
    </nav>
  </body>
    </html>
  
</body>
</html>
