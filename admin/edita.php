<?php
include("db_connect.php");

$head= '';
$content='';
$head_2='';
$content_2='';
$link_1='';
$link_2='';
$link_3='';
$link_4='';
$adresse='';
$heure='';
$telephone='';
$email='';
$map='';
$img_1='';
$img_2='';
$img_3='';
$img_4='';
$img_5='';
$img_6='';
$img_7='';
$img_8='';
$img_9='';


if(isset($_POST['update'])){
$id=$_POST['id'];
$head=$_POST["head"];
$head = str_replace("'","\'",$head);
$content=$_POST["content"];
$content = str_replace("'","\'",$content);
$head_2=$_POST["head_2"];
$head_2 = str_replace("'","\'",$head_2);
$content_2=$_POST["content_2"];
$content_2 = str_replace("'","\'",$content_2);
$link_1=$_POST["link_1"];
$link_1 = str_replace("'","\'",$link_1);
$link_2=$_POST["link_2"];
$link_2 = str_replace("'","\'",$link_2);
$link_3=$_POST["link_3"];
$link_3 = str_replace("'","\'",$link_3);
$link_4=$_POST["link_4"];
$link_4 = str_replace("'","\'",$link_4);
$adresse=$_POST["adresse"];
$adresse = str_replace("'","\'",$adresse);
$heure=$_POST["heure"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$map=$_POST["map"];
$map = str_replace("'","\'",$map);
$img_1=$_FILES["img_1"]['name'];
$img_2=$_FILES["img_2"]['name'];
$img_3=$_FILES["img_3"]['name'];
$img_4=$_FILES["img_4"]['name'];
$img_5=$_FILES["img_5"]['name'];
$img_6=$_FILES["img_6"]['name'];
$img_7=$_FILES["img_7"]['name'];
$img_8=$_FILES["img_8"]['name'];
$img_9=$_FILES["img_9"]['name'];





$result= mysqli_query($bdd, "UPDATE accueil SET  head = '$head',content = '$content',head_2 = '$head_2',content_2 = '$content_2',link_1= '$link_1', link_2= '$link_2',link_3= '$link_3',link_4= '$link_4',adresse = '$adresse', heure = '$heure', telephone = '$telephone',email = '$email',map = '$map',img_1='$img_1',img_2='$img_2',img_3='$img_3',img_4='$img_4',img_5='$img_5',img_6='$img_6',img_7='$img_7',img_8='$img_8',img_9='$img_9' where id='$id' ");
move_uploaded_file($_FILES["img_1"]["tmp_name"], "upload/".$_FILES["img_1"]["name"]);     
move_uploaded_file($_FILES["img_2"]["tmp_name"], "upload/".$_FILES["img_2"]["name"]);     
move_uploaded_file($_FILES["img_3"]["tmp_name"], "upload/".$_FILES["img_3"]["name"]);     
move_uploaded_file($_FILES["img_4"]["tmp_name"], "upload/".$_FILES["img_4"]["name"]);     
move_uploaded_file($_FILES["img_5"]["tmp_name"], "upload/".$_FILES["img_5"]["name"]);     
move_uploaded_file($_FILES["img_6"]["tmp_name"], "upload/".$_FILES["img_6"]["name"]);     
move_uploaded_file($_FILES["img_7"]["tmp_name"], "upload/".$_FILES["img_7"]["name"]);     
move_uploaded_file($_FILES["img_8"]["tmp_name"], "upload/".$_FILES["img_8"]["name"]);     
move_uploaded_file($_FILES["img_9"]["tmp_name"], "upload/".$_FILES["img_9"]["name"]);    


echo ("<script LANGUAGE='JavaScript'>

        window.alert('Accueil Modifier');

        window.location.href='accueil.php';
         </script>");
}




?>
<?php

$id=$_GET['id'];
$result=mysqli_query($bdd,"SELECT * FROM accueil WHERE id=$id");

while( $row = mysqli_fetch_array($result)){

$head= $row['head'];
$content=$row['content'];
$head_2=$row['head_2'];
$content_2=$row['content_2'];
$link_1=$row['link_1'];
$link_2=$row['link_2'];
$link_3=$row['link_3'];
$link_4=$row['link_4'];
$adresse=$row['adresse'];
$heure=$row['heure'];
$telephone=$row['telephone'];
$email=$row['email'];
$map=$row['map'];
$img_1=$row['img_1'];
$img_2=$row['img_2'];
$img_3=$row['img_3'];
$img_4=$row['img_4'];
$img_5=$row['img_5'];
$img_6=$row['img_6'];
$img_7=$row['img_7'];
$img_8=$row['img_8'];
$img_9=$row['img_9'];

}

?>
<!DOCTYPE html>
<html>
<head>
<title> Mise a jour </title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">

</head>
<body>

<!-- New Form -->

<br>
<h3 class="text-center"><a href="accueil.php">Retour Accueil</a></h3> 
<br>

<form action="edita.php" method="POST" enctype="multipart/form-data">

<div class="container">
    
            <div class="form-group">
                <label>Heading 1</label>
                <input type="text" name="head" class="form-control" placeholder="Entrer Heading 1" value="<?php echo $head;?>">
            </div>

            <div class="form-group">
                <label>Content 1</label>
                <input type="text" name="content" class="form-control" placeholder="Entrer content" value="<?php echo $content;?>">
            </div>

            <div class="form-group">
                <label>Heading 2</label>
                <input type="text" name="head_2" class="form-control" placeholder="Entrer head_2" value="<?php echo $head_2;?>">
            </div>

            <div class="form-group">
                <label>Content 2</label>
                <input type="text" name="content_2" class="form-control" placeholder="Entrer content_2" value="<?php echo $content_2;?>">
            </div>

            <div class="form-group">
                <label>Link_Twitter</label>
                <input type="text" name="link_1" class="form-control" placeholder="Entrer link_1" value="<?php echo $link_1;?>">
            </div>

            <div class="form-group">
                <label>Link_Instagram</label>
                <input type="text" name="link_2" class="form-control" placeholder="Entrer link_2" value="<?php echo $link_2;?>">
            </div>

            <div class="form-group">
                <label>Link_Facebook</label>
                <input type="text" name="link_3" class="form-control" placeholder="Entrer link_3" value="<?php echo $link_3;?>">
            </div>

            <div class="form-group">
                <label>Link_Pinterest</label>
                <input type="text" name="link_4" class="form-control" placeholder="Entrer link_4" value="<?php echo $link_4;?>">
            </div>

            <div class="form-group">
                <label>Adresse</label>
                <input type="text" name="adresse" class="form-control" placeholder="Entrer adresse" value="<?php echo $adresse;?>">
            </div>
            
            <div class="form-group">
                <label>Heure</label>
                <input type="text" name="heure" class="form-control" placeholder="Entrer l'heure" value="<?php echo $heure;?>">
            </div>

            <div class="form-group">
                <label>Numero télephone</label>
                <input type="text" name="telephone" class="form-control" placeholder="Entrer numero télephone" value="<?php echo $telephone;?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control checking_email" placeholder="Entrer email" value="<?php echo $email;?>">
                <small class="error_email" style="color: red;"></small>
            </div>

            <div class="form-group">
                <label>Map</label>
                <input type="text" name="map" class="form-control checking_email" placeholder="Entrer map" value="<?php echo $map;?>">
            </div>

            <div class="form-group">
                <label>Upload Image 1</label>
                <input type="file" id="img_1"  name="img_1" class="form-control" value="<?php echo $img_1;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 2</label>
                <input type="file" id="img_2" name="img_2" class="form-control" value="<?php echo $img_2;?>">
            </div>   

            <div class="form-group">
                <label>Upload Image 3</label>
                <input type="file" id="img_3" name="img_3" class="form-control" value="<?php echo $img_3;?>">
            </div>

             <div class="form-group">
                <label>Upload Image 4</label>
                <input type="file" id="img_4" name="img_4" class="form-control" value="<?php echo $img_4;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 5</label>
                <input type="file" id="img_5" name="img_5" class="form-control" value="<?php echo $img_5;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 6</label>
                <input type="file" id="img_6" name="img_6" class="form-control" value="<?php echo $img_6;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 7</label>
                <input type="file" id="img_7" name="img_7" class="form-control" value="<?php echo $img_7;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 8</label>
                <input type="file" id="img_8" name="img_8" class="form-control" value="<?php echo $img_8;?>">
            </div>   

             <div class="form-group">
                <label>Upload Image 9</label>
                <input type="file" id="img_9"  name="img_9" class="form-control" value="<?php echo $img_9;?>">
            </div>       
         
         
            

    <Input type="hidden" name="id" value=<?php echo $_GET['id'];?>></Input>
    <p class="text-center"><Input type="submit" class="btn btn-dark" name="update" value="update"></Input></p>

    <br><br>

</form>

</div>

</body>
</html>

