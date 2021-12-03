<?php
session_start();
$name = $_SESSION['name'];
$purok = $_SESSION['purok'];
$position = $_SESSION['position'];
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
  <link rel="stylesheet" href="./assets/css/residents.css" />
  <script src="./assets/js/residents.js" type="text/javascript"></script>
</head>

<body>
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
      <img class="rounded-pill img-fluid" width="65" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
      <div class="ms-2">
        <h5 class="fs-6 mb-0">
          <a class="text-decoration-none headName" href="#"> &nbsp; <?php echo $name; ?></a>
        </h5>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $position ?></p>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $purok ?></p>
      </div>
    </div>
    <ul class="categories list-unstyled">
      <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
      <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
      <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
      <li><i class="fa fa-users sideIcons"></i><a href="viewUser.php"> Accounts</a></li>
      <li><i class="fa fa-plus sideIcons"></i><a href="registerOfficial.php"> Add Personnel</a></li>
      <li><i class="fa fa-file sideIcons"></i><a href="#"> Documents</a></li>
      <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
    </ul>
  </aside>
  <section>
    <div class="container">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8">
              <h2>Resident Information Management</h2>
            </div>
            <div class="col-sm-4">
              <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Add New Resident</span></a>
            </div>
          </div>
        </div>
        <div class="search-bar">
          <div class="col-sm-12">
            <div class="search">
              <input type="text" class="searchTerm" placeholder="Resident Search">
              <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th data-field="resID">Resident ID</th>
              <th data-field="lName" data-sortable="true">Last Name</th>
              <th data-field="fName" data-sortable="true">First Name</th>
              <th data-field="mName" data-sortable="true">Middle Name</th>
              <th data-field="vStatus" data-sortable="true">Gender</th>
              <th data-field="occuptaion" data-sortable="true">Purok</th>
              <th data-field="encoder" data-sortable="true">Encoder</th>
              <th data-field="enPosition" data-sortable="true">Encoder Position</th>
              <th data-field="view">View Resident</th>
            </tr>
          </thead>
          <form method="POST" action="./database/database.php">
            <tbody>
              <?php
              include_once("./database/connection.php");
              $getResidents = "SELECT * FROM residents";
              $result = mysqli_query($conn, $getResidents);
              if (mysqli_num_rows($result) > 0) {
                while ($residents = mysqli_fetch_assoc($result)) {
                  $lastName = $residents['nameLast'];
                  $firstName = $residents['nameFirst'];
                  $middleName = $residents['nameMiddle'];
                  $purok = $residents['purok'];
                  echo
                  "<tr><td>" . $residents['residentID']
                    . "</td><td>" . $residents['nameLast']
                    . "</td><td>" . $residents['nameFirst']
                    . "</td><td>" . $residents['nameMiddle']
                    . "</td><td>" . $residents['gender']
                    . "</td><td>" . $residents['purok']
                    . "</td><td>" . $residents['encoder']
                    . "</td><td>" . $residents['encoderPosition']
                    . "<td><button name='btnViewResident' target='_blank' type='submit' value=" . $residents['residentID'] . " class='btn btn-success bg-gradient fa fa-eye'></button>
                            <button name='btnEditResident' target='_blank' type='submit' value=" . $residents['residentID'] . " class='btn btn-warning bg-gradient fa fa-edit'></button>
                            <button name='btnDeleteResident' target='_blank' type='submit' value=" . $residents['residentID'] . " class='btn btn-danger bg-gradient fa fa-trash'></button></td>"
                    . "</td></tr>";
                }
              }
              ?>
            </tbody>
          </form>
        </table>
      </div>
    </div>
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Add Resident</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Add">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="./database/database.php" method="POST">
            <div class="modal-header">
              <h4 class="modal-title">Edit Resident Information</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" name="editInfo" class="btn btn-info" value="Save">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h4 class="modal-title">Delete Resident</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete these Records?</p>
              <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-danger" value="Delete">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>