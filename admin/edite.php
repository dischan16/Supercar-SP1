<?php
include("db_connect.php");

$title= '';
$images='';
$p1='';
$p2='';
$p3='';


if(isset($_POST['update'])){
$id=$_POST['id'];
$title=$_POST["title"];
$images=$_FILES["images"]['name'];
$p1=$_POST["p1"];
$p1 = str_replace("'","\'",$p1);
$p2=$_POST["p2"];
$p2 = str_replace("'","\'",$p2);
$p3=$_POST["p3"];
$p3 = str_replace("'","\'",$p3);

$result= mysqli_query($bdd, "UPDATE service SET  title = '$title',images = '$images',p1 = '$p1',p2 = '$p2',p3 = '$p3' where id='$id' ");
move_uploaded_file($_FILES["images"]["tmp_name"], "upload/".$_FILES["images"]["name"]);     

echo ("<script LANGUAGE='JavaScript'>
        window.alert('Service Modifier');
        window.location.href='service_admin.php';
         </script>");
}

?>
<?php

$id=$_GET['id'];
$result=mysqli_query($bdd,"SELECT * FROM service WHERE id=$id");

while( $row = mysqli_fetch_array($result)){

$title=$row['title'];
$images=$row['images'];
$p1=$row['p1'];
$p2=$row['p2'];
$p3=$row['p3'];

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
<h3 class="text-center"><a href="service_admin.php"> Retour Service</a></h3> 


<form action="edite.php" method="POST" enctype="multipart/form-data">

<div class="container">

            <div class="modal-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter Name"  value="<?php echo $title;?>">
                </div>    
                <div class="form-group">
                    <label>Upload Image</label>
                    <input type="file" name="images" class="form-control" placeholder="Enter Designation"  value="<?php echo $images;?>">
                </div>
                <div class="form-group">
                    <label>Paragraph_1</label>
                    <textarea name="p1" class="form-control" placeholder="Enter Description"><?php echo $p1;?></textarea>
                </div>
                <div class="form-group">
                    <label>Paragraph_2</label>
                    <textarea name="p2" class="form-control" placeholder="Enter Description"><?php echo $p2;?></textarea>
                </div>
                <div class="form-group">
                    <label>Paragraph_3</label>
                    <textarea name="p3" class="form-control" placeholder="Enter Description"><?php echo $p3;?></textarea>
                </div>
              
    
                <Input type="hidden" name="id" value=<?php echo $_GET['id'];?>></Input>
                <p class="text-center"> <Input type="submit" class="btn btn-dark" name="update" value="update"></Input> </p>


                
            </div>

</form>

</div>

</body>
</html>

