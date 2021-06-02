<html>
<head>
    <title>Add Service</title>
</head>
 
<body>
<?php

include ("config.php");

$title="";
$images="";
$p1="";
$p2="";
$p3="";

$title=$_POST["title"];
$images=$_FILES["images"]['name'];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];


$ajouter = "INSERT into service (title,images, p1,p2,p3)
			VALUES ('$title','$images','$p1','$p2','$p3')";
mysqli_query($bdd, $ajouter);
			
move_uploaded_file($_FILES["images"]["tmp_name"], "upload/".$_FILES["images"]["name"]);   

echo ("<script LANGUAGE='JavaScript'>
        window.location.href='service_admin.php';
         </script>");

mysqli_close($bdd);
?>
<br>
</body>
</html>