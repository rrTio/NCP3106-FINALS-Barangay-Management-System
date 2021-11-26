<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Info</title>
        <link rel="icon" href="./assets/images/logo.png">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
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
                        <a class="text-decoration-none headName" href="#"> &nbsp; <?php echo $_SESSION['name']?></a>
                    </h5>
                    <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $_SESSION['purok']?></p>
                </div>
            </div>
            <ul class="categories list-unstyled">
                <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
                <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
                <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
                <li><i class="fa fa-users sideIcons"></i><a href="view-user.php"> Accounts</a></li>
                <li><i class="fa fa-plus sideIcons"></i><a href="register-official.php"> Add Personnel</a></li>
                <li><i class="fa fa-file sideIcons"></i><a href="#"> Documents</a></li>
                <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
            </ul>
        </aside>
    </body>
</html>