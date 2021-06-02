<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Supercar Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<!-- https://www.google.com/alerts?pli=1# -->

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-dark p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="admin_accueil.php">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-car-side"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Supercar</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin_accueil.php"><i class="fas fa-signal"></i><span>Stats&nbsp;</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="accueil.php"><i class="fas fa-home"></i><span>Accueil&nbsp;</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="contact.php"><i class="fas fa-file-contract"></i><span>Contact</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="de.php"><i class="fas fa-car"></i><span>Demande D'essai</span></a>
                    <a class="nav-link" href="voiture.php"><i class="fas fa-car-side"></i><span>Voiture</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="users.php"><i class="far fa-user-circle"></i><span>User</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="users_admin.php"><i class="far fa-user-circle"></i><span>User Admin</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="service_admin.php"><i class="fas fa-tools"></i><span>Service</span></a>

                </ul>
                <!-- <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div> -->
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                         
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administrator Menu
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="reset_pass_admin.php">Reset Password</a>
                                <a class="dropdown-item" href="logout_admin.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>