<?php
include_once('./database/connection.php');
session_start();
$name = $_SESSION['name'];
$purok = $_SESSION['purok'];
$position = $_SESSION['position'];
$totalResidents = $_SESSION['residents'];
$totalOfficials = $_SESSION['officials'];
$totalVoters = $_SESSION['voters'];
$image = $_SESSION['imageLocation'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="icon" href="./assets/images/logo.png">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
  <link rel="stylesheet" href="./assets/css/dashboard.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <script type="text/javascript" src="./assets/js/dashboard.js"></script>
</head>

<body>
  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
      <?php
      echo "<img class='rounded-pill img-fluid border-2' width='25%' src=" .  $image . " alt='Official's Image'>"
      ?>
      <div class="ms-2">
        <h5 class="fs-6 mb-0">
          <a class="text-decoration-none headName" href="#"> &nbsp; <?php echo $name; ?></a>
        </h5>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $position ?></p>
        <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $purok ?></p>
      </div>
    </div>
    </div>
    <ul class="categories list-unstyled">
      <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
      <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
      <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
      <li><i class="fa fa-users sideIcons"></i><a href="viewUser.php"> Accounts</a></li>
      <li><i class="fa fa-plus sideIcons"></i><a href="registerOfficial.php"> Add Personnel</a></li>
      <li><i class="fa fa-file sideIcons"></i><a href="certification.php"> Documents</a></li>
      <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
    </ul>
  </aside>

  <section>
    <div class="p-4">
      <div class="welcome">
        <div class="content rounded-3 p-3">
          <h1 class="fs-3">Welcome to Dashboard</h1>
          <p class="mb-0">Hello <?php echo $position . " " . $name . " of " . $purok; ?></p>
          <p class="mb-0">Image Location <?php echo $image ?></p>
        </div>
      </div>
      <section class="statistics mt-4">
        <div class="row">
          <div class="col-lg-4">
            <div class="box d-flex rounded-1 align-items-center mb-4 mb-lg-0 p-3">
              <i class="uil-user-square fs-2 text-center bg-primary rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0"><?php echo $totalVoters ?></h3> <span class="d-block ms-2">Voters</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
              <i class="uil-user fs-2 text-center bg-danger rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0"><?php echo $totalOfficials ?></h3> <span class="d-block ms-2">Admins</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box d-flex rounded-2 align-items-center p-3">
              <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
              <div class="ms-3">
                <div class="d-flex align-items-center">
                  <h3 class="mb-0"><?php echo $totalResidents ?></h3> <span class="d-block ms-2">Residents</span>
                </div>
                <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <section class="officials">
    <div class="container">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-8">
              <h2>&nbsp;Officials</h2>
            </div>
            <div class="col-sm-4">
              <a href="registerOfficial.php" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Official</span></a>
            </div>
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th data-field="officialID">ID Number</th>
              <th data-field="position">Position</th>
              <th data-field="lName" data-sortable="true">Last Name</th>
              <th data-field="fName" data-sortable="true">First Name</th>
              <th data-field="mName" data-sortable="true">Middle Name</th>
              <th data-field="alias" data-sortable="true">Alias</th>
              <th data-field="purok" data-sortable="true">Purok</th>
              <th data-field="view">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Official</th>
            </tr>
          </thead>
          <form method="POST" action="./database/database.php">
            <tbody>
              <?php
              include_once("./database/connection.php");
              $getOfficials = "SELECT * FROM officials";
              $result = mysqli_query($conn, $getOfficials);
              if (mysqli_num_rows($result) > 0) {
                while ($officials = mysqli_fetch_assoc($result)) {
                  $lastName = $officials['nameLast'];
                  $firstName = $officials['nameFirst'];
                  $middleName = $officials['nameMiddle'];
                  $purok = $officials['purok'];
                  echo "<tr>"
                    . "<td>" . $officials['idNumber']
                    . "</td><td>" . $officials['position']
                    . "</td><td>" . $officials['nameLast']
                    . "</td><td>" . $officials['nameFirst']
                    . "</td><td>" . $officials['nameMiddle']
                    . "</td><td>" . $officials['nameAlias']
                    . "</td><td>" . $officials['purok']
                    . "</td><td><button name='btnView' type='submit' value=" . $officials['idNumber'] . " class='btn btn-success bg-gradient fa fa-eye'></button>
                              <button name='btnEdit' type='submit' value=" . $officials['idNumber'] . " class='btn btn-warning bg-gradient fa fa-edit'></button>
                              <button name='btnDelete' type='submit' value=" . $officials['idNumber'] . " class='btn btn-danger bg-gradient fa fa-trash'></button></td>"
                    . "</tr>";
                }
              }
              ?>
            </tbody>
          </form>
        </table>
      </div>
    </div>
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

  </div>
  </section>
</body>

</html>