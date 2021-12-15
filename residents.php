<?php
include_once('./database/connection.php');
session_start();
$name = $_SESSION['name'];
$purok = $_SESSION['purok'];
$position = $_SESSION['position'];
$image = $_SESSION['imageLocation'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Residents List</title>
  <link rel="icon" href="./assets/images/logo.png">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/residents.css" />
  <script src="./assets/js/residents.js" type="text/javascript"></script>
</head>

<body>
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <div class="sidebar-header d-flex align-items-center px-3 py-4">
      <?php
      echo "<img class='rounded-pill img-fluid border-2' width='25%' src=" .  $image . " alt='Official's Image'>"
      ?>
      <div class="ms-2">
        <h5 class="fs-6 mb-0">
          <a class="text-decoration-none headName" href="viewUser.php"> &nbsp; <?php echo $name; ?></a>
        </h5>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $position ?></p>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $purok ?></p>
      </div>
    </div>
    <ul class="categories list-unstyled">
      <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
      <li><i class="fa fa-user sideIcons"></i><a href="viewUser.php"> My Profile</a></li>
      <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
      <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
      <li><i class="fa fa-plus sideIcons"></i><a href="registerOfficial.php"> Register Official</a></li>
      <li><i class="fa fa-calendar sideIcons"></i><a href="logs.php"> Logs</a></li>
      <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
    </ul>
  </aside>
  <section>
    <div class="container">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6">
              <h2>Resident Information Management</h2>
            </div>
            <div class="col-sm-3">
              <div class="search">
                <input onkeyup="searchElement()" type="text" class="searchTerm" name="searchResident" id="searchResident" placeholder="Resident Search">
              </div>
            </div>
            <div class="col-sm-3">
              <button class="btn btn-success" onclick="return registerResident()"><span>Add New Resident</span></button>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover" id="residentsTable">
          <thead>
            <tr>
              <th data-field="resID">Resident ID</th>
              <th data-field="lName" data-sortable="true">Last Name</th>
              <th data-field="fName" data-sortable="true">First Name</th>
              <th data-field="mName" data-sortable="true">Middle Name</th>
              <th data-field="vStatus" data-sortable="true">Gender</th>
              <th data-field="occuptaion" data-sortable="true">Purok</th>
              <th data-field="view">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
            </tr>
          </thead>
          <form method="POST" action="./database/database.php">
            <tbody>
              <?php
                include_once("./database/connection.php");
                $getResidents = "SELECT * FROM residents ORDER BY `dateRegistered` DESC, `timeRegistered` DESC";
                $result = mysqli_query($conn, $getResidents);
                if (mysqli_num_rows($result) > 0) {
                  while ($residents = mysqli_fetch_assoc($result)) {
                    echo
                    "<tr id='residentRow'><td>" . $_SESSION['residentID'] = $residents['residentID']
                      . "</td><td name='lastName' value".$residents['nameLast'].">" . $residents['nameLast']
                      . "</td><td name='firstName' value".$residents['nameFirst'].">" . $residents['nameFirst']
                      . "</td><td name='middleName' value".$residents['nameMiddle'].">" . $residents['nameMiddle']
                      . "</td><td>" . $residents['gender']
                      . "</td><td>" . $residents['purok']
                      . "<td> <button name='btnViewResident' target='_blank' title='View Resident' type='submit' value=" . $residents['residentID'] . " class='btn btn-success bg-gradient text-dark fa fa-eye'></button>
                              <button name='btnDeleteResident' target='_blank' title='Delete Resident' type='submit' value=" . $residents['residentID'] . " class='btn btn-danger bg-gradient text-dark fa fa-trash'></button>
                              <button name='btnDownloadResidency' target='_blank' title='Download Certificate of Residency' type='submit' value=" . $residents['residentID'] . " class='btn btn-info bg-gradient text-dark fas fa-file-export'></button>
                              <button name='btnDownloadClearance' target='_blank' title='Download Barangay Clearance' type='submit' value=" . $residents['residentID'] . " class='btn btn-warning bg-gradient text-dark fas fa-file-download'></button>"
                      . "</td></tr>";
                  }
                }
              ?>
            </tbody>
            <input type="hidden" value="<?php echo $name?>" name='encoder'>
            <input type='hidden' value='<?php echo $position?>' name='encoderPosition'>
            <input type='hidden' value='<?php echo $purok?>' name='encoderPurok'>
            
          </form>
        </table>
      </div>
    </div>
  </section>
</body>

</html>