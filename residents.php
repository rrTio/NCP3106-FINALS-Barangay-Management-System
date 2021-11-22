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
			<div class="content mainLayout">
					<div class="container-fluid">
						<div class="row">
							<div class="content">
								<div class="heading">
									<h4>Resident Information Management</h4>
								</div>
						<div class="toolbar">
							<form>
								<input type="search" placeholder="Search">
								<input type="submit" value="New Resident">
							</form>
						</div>  

										<table id="bootstrap-table" class="table">
											<thead>
											<th data-field="action">Action</th>
											<th data-field="resID">Resident's ID</th>
											<th data-field="lName" data-sortable="true">Last Name</th>
												<th data-field="fName" data-sortable="true">First Name</th>
												<th data-field="mName" data-sortable="true">Middle Name</th>
												<th data-field="alias" data-sortable="true">Alias</th>
												<th data-field="bDate">Birth Date</th>
												<th data-field="cStatus"data-sortable="true" >Civil Status</th>
												<th data-field="vStatus"data-sortable="true" >Voter Status</th>
												<th data-field="nationality"data-sortable="true">Nationality</th>
												<th data-field="religion"data-sortable="true">Religion</th>
												<th data-field="gender"data-sortable="true">Gender</th>
												<th data-field="occuptaion"data-sortable="true">Occupation</th>
												<th data-field="spouseName"data-sortable="true">Spouse's Name</th>
												<th data-field="spouseOccupation"data-sortable="true">Spouse's Occupation</th>
											</thead>
											<tbody>
												<tr>
													<td></td>
													<td>012345</td>
													<td>Reglos</td>
													<td>Rozs</td>
													<td>Raven</td>
													<td>Pogi</td>
													<td>01/01/2021</td>
																		<td>Rebound</td>
													<td>No</td>
													<td>Kenyan</td>
													<td>Taoist</td>
													<td>Male</td>
													<td>Networking</td>
													<td>Kim Pugad</td>
													<td>Rapper</td>
												</tr>
											</tbody>
										</table>
									</div>
						</div>
					</div>
				</div>
	</body>
</html>
