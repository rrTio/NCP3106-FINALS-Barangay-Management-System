<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Residents List</title>
		<meta charset="utf-8" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
		<meta name="viewport" content="width=device-width"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
		<link href="/assets/css/residents.css" rel="stylesheet"/>
		<link rel="stylesheet" href="./assets/css/main.css">   
	</head>

	<body>
		<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
		<i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
		<div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
			<img
				class="rounded-pill img-fluid"
				width="65"
				src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
				alt="">
			<div class="ms-2">
				<h5 class="fs-6 mb-0">
				<a class="text-decoration-none" href="#"> &nbsp; Jone Doe</a>
				</h5>
				<p class="mt-1 mb-0"> &nbsp; Lorem ipsum dolor sit amet consectetur.</p>
			</div>
		</div>
	<ul class="categories list-unstyled">
		<li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
		<li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
		<li><i class="fa fa-user-plus sideIcons"></i><a href="#"> Register Resident</a></li>
		<li><i class="fa fa-users sideIcons"></i><a href="#"> Accounts</a></li>
		<li><i class="fa fa-file sideIcons"></i><a href="#"> Documents</a></li>
		<li><i class="fa fa-plus sideIcons"></i><a href="#"> Add Personnel</a></li>
		<li><i class="fa fa-power-off sideIcons"></i><a href="#"> Logout</a></li>
	</ul>
	</aside>
	<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Resident Information Management</h2>
        </div>
        <div class="col-sm-6">
          <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
          <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
        </div>
      </div>
    </div>
    <table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>
					<span class="custom-checkbox">
						<input type="checkbox" id="selectAll">
						<label for="selectAll"></label>
					</span>
				</th>
				<th data-field="resID">Resident's ID</th>
				<th data-field="lName" data-sortable="true">Last Name</th>
				<th data-field="fName" data-sortable="true">First Name</th>
				<th data-field="mName" data-sortable="true">Middle Name</th>
				<th data-field="vStatus"data-sortable="true" >Voter Status</th>
				<th data-field="occuptaion"data-sortable="true">Occupation</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                <label for="checkbox1"></label>
              </span>
          </td>
          <td>2018-0213</td>
          <td>Jadoon</td>
          <td>Naix</td>
          <td>Garingan</td>
		  <td>No</td>
		  <td>Developer</td>

          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                <label for="checkbox2"></label>
              </span>
          </td>
          <td>2018-0213</td>
          <td>Jadoon</td>
          <td>Naix</td>
          <td>Garingan</td>
		  <td>No</td>
		  <td>Developer</td>
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                <label for="checkbox3"></label>
              </span>
          </td>
          <td>2018-0213</td>
          <td>Jadoon</td>
          <td>Naix</td>
          <td>Garingan</td>
		  <td>No</td>
		  <td>Developer</td>
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                <label for="checkbox4"></label>
              </span>
          </td>
          <td>2018-0213</td>
          <td>Jadoon</td>
          <td>Naix</td>
          <td>Garingan</td>
		  <td>No</td>
		  <td>Developer</td>
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
        <tr>
          <td>
            <span class="custom-checkbox">
                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                <label for="checkbox5"></label>
              </span>
          </td>
          <td>2018-0213</td>
          <td>Jadoon</td>
          <td>Naix</td>
          <td>Garingan</td>
		  <td>No</td>
		  <td>Developer</td>
          <td>
            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="clearfix">
      <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Add Employee</h4>
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
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Edit Employee</h4>
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
          <input type="submit" class="btn btn-info" value="Save">
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
          <h4 class="modal-title">Delete Employee</h4>
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
	</body>
</html>