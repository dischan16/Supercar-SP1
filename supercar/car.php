
<!DOCTYPE html>
<html>
<head>

<?php
    include ('config.php');

    $id=$_GET['id'];

    $sql= "SELECT * FROM voiture WHERE id='$id'";
    $curseur = mysqli_query($bdd, $sql);

    $id="";


    while ($row = mysqli_fetch_assoc($curseur)){
        $id = $row["id"]; 
        $image=$row['image'];
        $make=$row['make'];
        $prix=$row['prix'];
        $m_make = $row["m_make"];
        $modele = $row["modele"];
        $type = $row["type"];
        $annee = $row["annee"];
        $couleur = $row["couleur"];
        $moteur = $row["moteur"];
        $transmission = $row["transmission"];
        $cyclindre = $row["cyclindre"];
        $capacite = $row["capacite"];
        $jante = $row["jante"];
        $interieur = $row["interieur"];
        $km = $row["km"];
        $descrip_s = $row["descrip_s"];
        $descrip_e = $row["descrip_e"];
        $descrip_i = $row["descrip_i"];
        $descrip_m = $row["descrip_m"];
        $detail = $row["detail"];
        $img_1 = $row["img_1"];
        $img_2 = $row["img_2"];
        $img_3 = $row["img_3"];
        $img_4 = $row["img_4"];
        $img_5 = $row["img_5"];
        $img_6 = $row["img_6"];

        ?>
    <title><?php echo $m_make; ?></title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <style>

body {
	font-family: 'Varela Round', sans-serif;
}
h1{
    font-family: 'Varela Round', sans-serif;    
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #33cabb;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #31bfb1 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
	color: #fff;
	margin: 0;
	padding: 0 !important;
	font-size: 13px;
	border: none;
	transition: all 0.4s;
	text-align: center;
	line-height: 34px;
	width: 47%;
	text-decoration: none;
}
.navbar .social-btn .facebook-btn {
	background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
	background: #4676bd;
}
.navbar .social-btn .twitter-btn {
	background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
	background: #4ec7ef;
}
.navbar .social-btn .btn i {
	margin-right: 5px;
	font-size: 16px;
	position: relative;
	top: 2px;
}
.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}

#titlecolor {

color: #4d545f;
font-family: "Segoe UI";
letter-spacing: 5px;
font-size: 35px;
font-weight: lighter;
margin-top:10px;

}

#titlecolor1 {

color: #4d545f;
font-family: "Segoe UI";
letter-spacing: 5px;
font-size: 28px;
font-weight: lighter;
margin-top:10px;

}
</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
        </style>

    </head>
<body>
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a href="index.php" class="navbar-brand">Super<b>Car</b></a>  		
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
                
                <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link">Accueil</a>
                        <a href="selectionofvehicles.php" class="nav-item nav-link">Voiture</a>		
                        <a href="login_c.php" class="nav-item nav-link">Demande d'essai</a>
                        <a href="contact_c.php" class="nav-item nav-link">Contact</a>		
                        <a href="services.php" class="nav-item nav-link">Service</a>		
                    </div>
                    
                    <!-- <div class="navbar-nav ml-auto">
                        <a href="login_admin.php" class="nav-item nav-link">Admin</a>	
                    </div> -->
                    </div>
                </div>
            </nav>
     
    <div class="uk-container uk-container-medium uk-margin-top">

      
        
        <div style="text-align:center;"><p id="titlecolor"><?php echo $m_make; ?></h1></div>

    
        <div class="uk-child-width-1-2@s" uk-alert>
            <div class="uk-panel uk-panel-box uk-text-truncate">Le prix est: <?php echo $prix; ?></div>
        </div>

        <p  id="titlecolor1"> SOMMAIRE</p>
        <p><?php echo $descrip_s; ?></p>

        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['img_1'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
        </div>

        <div class="table-responsive"> <br>
            <table class="table">
                <thead  style="background-color:#50d0ae;">
                    <tr>
                    <th scope="col" style="color:white">Marque</th>
                    <th scope="col" style="color:white">Mod&eacutele</th>
                    <th scope="col" style="color:white">Type</th>
                    <th scope="col" style="color:white">Ann&eacutee</th>
                    <th scope="col" style="color:white">Couleur</th>
                    <th scope="col" style="color:white">Moteur</th>
                    <th scope="col" style="color:white">Transmission</th>
                    <th scope="col" style="color:white">Cylindre</th>
                    <th scope="col" style="color:white">Capacit&eacute</th>
                    <th scope="col" style="color:white">Jante</th>
                    <th scope="col" style="color:white">Interieur</th>
                    <th scope="col" style="color:white">Kilom&eacutetrage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $make; ?></th>
                    <td><?php echo $modele; ?></td>
                    <td><?php echo $type; ?></td>
                    <td><?php echo $annee; ?></td>
                    <td><?php echo $couleur; ?></td>
                    <td><?php echo $moteur; ?></td>
                    <td><?php echo $transmission; ?></td>
                    <td><?php echo $cyclindre; ?></td>
                    <td><?php echo $capacite; ?></td>
                    <td><?php echo $jante; ?></td>
                    <td><?php echo $interieur; ?></td>
                    <td><?php echo $km; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p id="titlecolor1">
            EXT&EacuteRIEUR
        </p>
        <p>
        <?php echo $descrip_e; ?>
        </p>

        <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['img_1'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$row['img_2'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$row['img_3'].'" class="d-block w-100" alt="Image">' ?>
                </div>
                <div class="carousel-item">
                    <?php echo '<img src="upload/'.$row['img_4'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>

            <a class="carousel-control-prev" style="color:black" href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>

        <p id="titlecolor1"> INT&EacuteRIEUR </p>
        <p>
        <?php echo $descrip_i; ?>
        </p>
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['img_5'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
        </div>

        <br>

        <p id="titlecolor1"> MOTEUR </p>

           <?php echo $descrip_m; ?> </p>
     

           <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php echo '<img src="upload/'.$row['img_6'].'" class="d-block w-100" alt="Image">' ?>
                </div>
            </div>
        </div>
        <br>
        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-width-1-1">
                    <label><?php echo $detail; ?></label>
                </div>
            </div>
        </div>
        <br>
    </div>
    <?php 
        }   
        mysqli_free_result($curseur);
    ?>       
</body>
</html>