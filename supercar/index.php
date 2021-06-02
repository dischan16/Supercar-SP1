<?php
include ('config.php');
$sql= "select * from accueil";
$curseur = mysqli_query($bdd, $sql);

$id="";



while ($row = mysqli_fetch_assoc($curseur)){
	$id = $row["id"]; 
	$head = $row["head"];
    $content = $row["content"];
    $head_2 = $row["head_2"];
    $content_2 = $row["content_2"];
    $link_1 = $row["link_1"];
    $link_2 = $row["link_2"];
    $link_3 = $row["link_3"];
    $link_4 = $row["link_4"];
    $adresse = $row["adresse"];
    $heure = $row["heure"];
    $telephone = $row["telephone"];
    $email = $row["email"];
    $map = $row["map"];
    $img_1 = $row["img_1"];
    $img_2 = $row["img_2"];
    $img_3 = $row["img_3"];
    $img_4 = $row["img_4"];
    $img_5 = $row["img_5"];
    $img_6 = $row["img_6"];
    $img_7 = $row["img_7"];
    $img_8 = $row["img_8"];
    $img_9 = $row["img_9"];

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>HOME</title>
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
font-size: 45px;
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
                <a href="services.php" class="nav-item nav-link">Services</a>		
                <a href="contact_c.php" class="nav-item nav-link">Contact</a>	
            </div>
            
                <!-- <div class="navbar-nav ml-auto">
                    <a href="login_admin.php" class="nav-item nav-link">Admin</a>	
                </div> -->
            </div>
        </div>
    </nav>



<div class="uk-section uk-padding-remove-top">
    <br>
    <div class="uk-container">

        <div class="uk-child-width-1-1@s" uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-card-body uk-width-1-1">
                    <h3 class="uk-card-title"><?php echo $head ?></h3>
                    <label><?php echo $content ?></label> <br>
                </div>
            </div>
        </div>
        <br>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
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
            <a class="carousel-control-prev" style="color:black" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>

    <div class="uk-section uk-padding-remove-top" id="scroll">
        <div class="uk-container">
            <h2 id="titlecolor" style="text-align: center;">NOUVELLES ARRIVEE</h2><br>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                    <li class="uk-width-1-3">
                        <div class="uk-panel">
                           <?php echo '<img src="upload/'.$row['img_5'].'" width="400px" height="100px" alt="Image">' ?>
                        </div>
                    </li>

                    <li class="uk-width-1-3">
                        <div class="uk-panel">
                            <?php echo '<img src="upload/'.$row['img_6'].'" width="400px" height="100px" alt="Image">' ?>
                        </div>
                    </li>
                    <li class="uk-width-1-3">
                        <div class="uk-panel">
                            <?php echo '<img src="upload/'.$row['img_7'].'" width="400px" height="100px" alt="Image">' ?>
                        </div>
                    </li>
                    <li class="uk-width-1-3">
                        <div class="uk-panel">  
                            <?php echo '<img src="upload/'.$row['img_8'].'" width="400px" height="100px" alt="Image">' ?>
                        </div>
                    </li>
                    <li class="uk-width-1-3">
                        <div class="uk-panel">
                            <?php echo '<img src="upload/'.$row['img_9'].'" width="400px" height="100px" alt="Image">' ?>
                        </div>
                    </li>
                </ul>

                <!-- <hr style="background-color:#dee2e6" class="uk-divider-icon">   -->
        
               <a class="uk-position-center-left uk-position-small" style="color:black" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
               <a class="uk-position-center-right uk-position-small" style="color:black" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
            
            <br>
           
            <div class= "uk-child-width-1-2@s" uk-alert>
                <div>
                    <div class="uk-card uk-card-muted uk-card-body uk-width-1-1">
                        <h3 class="uk-card-title"><?php echo $head_2 ?></h3>
                        <label><?php echo $content_2 ?></label> <br>
                    </div>
                </div>
            </div>
               
        </div>
    </div> 

        <hr class="uk-divider-icon">


        <div class="uk-section">
            <div class="uk-container">

            <h2 id="titlecolor" style= "text-align: center;">Rejoignez-nous !</h2><br>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                    
                    <li>
                        <img src="upload/2002.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill"  href="<?php echo $link_1;?>" uk-icon="twitter" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">TWITTER&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/33.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill"  href="<?php echo $link_2;?>"  uk-icon="instagram" style="background-color: rgb(238, 30, 117); color:white;margin-bottom: 4px;">INSTAGRAM&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/4.jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill"  href="<?php echo $link_3;?>"  uk-icon="facebook" style="background-color: rgb(30, 85, 238); color:white;margin-bottom: 4px;">FACEBOOK&nbsp;</a></div>
                    </li>
                    <li>
                        <img src="upload/3 (2).jpg" alt="">
                        <div class="uk-position-bottom-center uk-panel"><a class="uk-button uk-button-primary uk-border-pill"  href="<?php echo $link_4;?>" uk-icon="pinterest" style="background-color: rgb(30, 155, 238); color:white;margin-bottom: 4px;">Pinterest&nbsp;</a></div>
                    </li>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    
            </div>            
        </div>
        <br><br>
        <hr class="uk-divider-icon">

        <div class="uk-section">
            <div class="uk-container">
               

        <h2 id="titlecolor" style= "text-align: center;">Coordonn&eacutee</h2><br>

        <div class="uk-align-left">
            <h4 style= "font-family: Segoe UI;"> PASSEZ NOUS VOIR </h4>
        
            <dl class="uk-description-list uk-description-list-divider">
                <dt style="color:black">Adresse:</dt>
                <dd><?php echo $adresse ?></dd>
                <dt style="color:black">Heure d'ouverture:</dt>
                <dd><?php echo $heure ?></dd>  
                <dt  style="color:black">Telephone:</dt>
                <dd><?php echo $telephone ?></dd>
                <dt  style="color:black">Email:</dt>
                <dd><?php echo $email ?></dd>
            </dl>

        </div>

        <div>
            <iframe src="<?php echo $map;?>" class="uk-align-right" width="290" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

<?php
}

mysqli_free_result($curseur);
mysqli_close($bdd);
?>

            </div>
        </div> 
        <div uk-alert>
            <p style= "text-align: center;">Copyright © Supercar 2020</p>
            <p  class="text-center"><a href="mention.php">Mentions légales</a></p>
        </div>
</body>
</html>