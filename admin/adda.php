<html>
<head>
    <title>Add Data Accueil</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    
</head>
 
<body>

<div class="uk-container">
<?php
  
include ("config.php");

$head="";
$content="";
$head_2="";
$content_2="";
$link_1="";
$link_2="";
$link_3="";
$link_4="";
$adresse="";
$heure="";
$telephone="";
$email="";
$map="";
$img_1="";
$img_2="";
$img_3="";
$img_4="";
$img_5="";
$img_6="";
$img_7="";
$img_8="";
$img_9="";

    


$head=$_POST["head"];
$content=$_POST["content"];
$head_2=$_POST["head_2"];
$content_2=$_POST["content_2"];
$link_1=$_POST["link_1"];
$link_2=$_POST["link_2"];
$link_3=$_POST["link_3"];
$link_4=$_POST["link_4"];
$adresse=$_POST["adresse"];
$heure=$_POST["heure"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$map=$_POST["map"];
$img_1=$_FILES["img_1"]['name'];
$img_2=$_FILES["img_2"]['name'];
$img_3=$_FILES["img_3"]['name'];
$img_4=$_FILES["img_4"]['name'];
$img_5=$_FILES["img_5"]['name'];
$img_6=$_FILES["img_6"]['name'];
$img_7=$_FILES["img_7"]['name'];
$img_8=$_FILES["img_8"]['name'];
$img_9=$_FILES["img_9"]['name'];



$ajouter = "INSERT into accueil (head,content,head_2,content_2,link_1,link_2,link_3,link_4,adresse,heure,telephone,email,map,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9)
			VALUES ('$head','$content','$head_2','$content_2','$link_1','$link_2','$link_3','$link_4','$adresse','$heure','$telephone','$email','$map','$img_1','$img_2','$img_3','$img_4','$img_5','$img_6','$img_7','$img_8','$img_9')";
mysqli_query($bdd, $ajouter);
			
move_uploaded_file($_FILES["img_1"]["tmp_name"], "upload/".$_FILES["img_1"]["name"]);     
move_uploaded_file($_FILES["img_2"]["tmp_name"], "upload/".$_FILES["img_2"]["name"]);     
move_uploaded_file($_FILES["img_3"]["tmp_name"], "upload/".$_FILES["img_3"]["name"]);     
move_uploaded_file($_FILES["img_4"]["tmp_name"], "upload/".$_FILES["img_4"]["name"]);     
move_uploaded_file($_FILES["img_5"]["tmp_name"], "upload/".$_FILES["img_5"]["name"]);     
move_uploaded_file($_FILES["img_6"]["tmp_name"], "upload/".$_FILES["img_6"]["name"]);     
move_uploaded_file($_FILES["img_7"]["tmp_name"], "upload/".$_FILES["img_7"]["name"]);     
move_uploaded_file($_FILES["img_8"]["tmp_name"], "upload/".$_FILES["img_8"]["name"]);     
move_uploaded_file($_FILES["img_9"]["tmp_name"], "upload/".$_FILES["img_9"]["name"]);     
mysqli_close($bdd);

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='accueil.php';
         </script>");

?>
<div>


</body>
</html>