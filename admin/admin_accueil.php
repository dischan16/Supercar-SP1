<?php
// Initialize the session
session_start();

include('config.php');
 
?>
 

<?php
include_once("db_connect.php");
?>
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
                         
                        <h3>Bienvenue <?php echo htmlspecialchars($_SESSION["admin_username"]);?> </h3> 

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

                        <!-- <a href="reset_pass_admin.php" class="btn btn-dark">Reset Admin Password</a>
     
                        <a href="logout_admin.php" class="btn btn-dark">LOG OUT</a> -->
                    </div>
                </nav>





                <div class="container-fluid">
                   

                <!-- Begin page content  -->

                <div class="container-fluid">

                <!-- Page Heading-->

                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Stats</h3>
                </div>

                <!-- content row -->

                <div class="row">

                <!--Login Users -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Login Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                  
                                 $query = "SELECT id FROM users ORDER BY id";
                                 $query_run = mysqli_query($bdd,$query);
                                 
                                 $row = mysqli_num_rows($query_run);

                                 echo  '<h3>'.$row.'</h3>';
                                
                                ?>
                                </div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Admin Users -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Admin Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                  
                                 $query = "SELECT id FROM users_admin ORDER BY id";
                                 $query_run = mysqli_query($bdd,$query);
                                 
                                 $row = mysqli_num_rows($query_run);

                                 echo  '<h3>'.$row.'</h3>';
                                
                                ?>
                                </div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                 <!-- Contact -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Contact</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                  
                                 $query = "SELECT idclient FROM contactn ORDER BY idclient";
                                 $query_run = mysqli_query($bdd,$query);
                                 
                                 $row = mysqli_num_rows($query_run);

                                 echo  '<h3>'.$row.'</h3>';
                                
                                ?>
                                </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file-contract fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         

                 <!-- Schedule -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Demande D'essai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                
                                <?php
                                  
                                 $query = "SELECT idclient FROM schedule ORDER BY idclient";
                                 $query_run = mysqli_query($bdd,$query);
                                 
                                 $row = mysqli_num_rows($query_run);

                                 echo  '<h3>'.$row.'</h3>';
                                
                                ?>
                                


                                </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-car-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                  

                 <!-- Nombre Voiture -->

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voiture</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                
                                <?php
                                  
                                 $query = "SELECT id FROM voiture ORDER BY id";
                                 $query_run = mysqli_query($bdd,$query);
                                 
                                 $row = mysqli_num_rows($query_run);

                                 echo  '<h3>'.$row.'</h3>';
                                
                                ?>
                                


                                </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-car-alt fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                             
              

        

             </div>
           
           
            </div>

            <br><br>

            <br><br>

            <br><br>

            <br><br>

            <br>


             <footer class="bg-white sticky-footer">

                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2020</span></div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>