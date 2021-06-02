<?php
include_once("db_connect.php");
$result = '';
$result = mysqli_query($bdd, "SELECT * FROM accueil");
?>

<?php include("header.php") ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Accueil</h3>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#accueil">
                        Add Info
        </button> -->
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
                <th scope="col">Heading 1</th>
                <th scope="col">Content 1</th>
                <th scope="col">Heading 2</th>
                <th scope="col">Content 2</th>
                <th scope="col">Link_1</th>
                <th scope="col">Link_2</th>
                <th scope="col">Link_3</th>
                <th scope="col">Link_4</th>
                <th scope="col">Adresse</th>
                <th scope="col">Heure</th>
                <th scope="col">Numero télephone</th>
                <th scope="col">Email</th>
                <th scope="col">Map</th>
                <th scope="col">Img_1</th>
                <th scope="col">Img_2</th>
                <th scope="col">Img_3</th>
                <th scope="col">Img_4</th>
                <th scope="col">Img_5</th>
                <th scope="col">Img_6</th>
                <th scope="col">Img_7</th>
                <th scope="col">Img_8</th>
                <th scope="col">Img_9</th>
                <th scope="col">Outils</th>

            </thead>
            <?php

            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['head'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['content'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['head_2'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['content_2'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['link_1'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['link_2'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['link_3'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['link_4'] . "</td>";
                echo "<td>" . $res['adresse'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['heure'] . "</td>";
                echo "<td>" . $res['telephone'] . "</td>";
                echo "<td>" . $res['email'] . "</td>";
                echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['map'] . "</td>";
                echo '<td> <img src="upload/' . $res['img_1'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_2'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_3'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_4'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_5'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_6'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_7'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_8'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                echo '<td> <img src="upload/' . $res['img_9'] . '" width = "150px;" height="100px;" alt="Image"> </td>';

                echo "<td><a href=\"edita.php?id=$res[id]\">Edit</a>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</div>
</div>
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

<!-- Modal Add Schedule -->

<div class="modal fade" id="accueil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adda.php" method="POST">

                <div class="container">

                    <div class="form-group">
                        <label>Heading 1</label>
                        <input type="text" name="head" class="form-control" placeholder="Entrer Heading 1">
                    </div>

                    <div class="form-group">
                        <label>Content 1</label>
                        <input type="text" name="content" class="form-control" placeholder="Entrer content">
                    </div>

                    <div class="form-group">
                        <label>Heading 2</label>
                        <input type="text" name="head_2" class="form-control" placeholder="Entrer head_2">
                    </div>

                    <div class="form-group">
                        <label>Content 2</label>
                        <input type="text" name="content_2" class="form-control" placeholder="Entrer content_2">
                    </div>

                    <div class="form-group">
                        <label>Link_1</label>
                        <input type="text" name="link_1" class="form-control" placeholder="Entrer link_1">
                    </div>

                    <div class="form-group">
                        <label>Link_2</label>
                        <input type="text" name="link_2" class="form-control" placeholder="Entrer link_2">
                    </div>

                    <div class="form-group">
                        <label>Link_3</label>
                        <input type="text" name="link_3" class="form-control" placeholder="Entrer link_3">
                    </div>

                    <div class="form-group">
                        <label>Link_4</label>
                        <input type="text" name="link_4" class="form-control" placeholder="Entrer link_4">
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="adresse" class="form-control" placeholder="Entrer adresse">
                    </div>

                    <div class="form-group">
                        <label>Heure</label>
                        <input type="text" name="heure" class="form-control" placeholder="Entrer l'heure">
                    </div>

                    <div class="form-group">
                        <label>Numero télephone</label>
                        <input type="text" name="telephone" class="form-control " placeholder="Entrer numero télephone">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control checking_email" placeholder="Entrer email">
                        <small class="error_email" style="color: red;"></small>
                    </div>

                    <div class="form-group">
                        <label>Map</label>
                        <input type="text" name="map" class="form-control" placeholder="Entrer map">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 1</label>
                        <input type="file" id="img_1" name="img_1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 2</label>
                        <input type="file" id="img_2" name="img_2" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 3</label>
                        <input type="file" id="img_3" name="img_3" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 4</label>
                        <input type="file" id="img_4" name="img_4" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 5</label>
                        <input type="file" id="img_5" name="img_5" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 6</label>
                        <input type="file" id="img_6" name="img_6" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 7</label>
                        <input type="file" id="img_7" name="img_7" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 8</label>
                        <input type="file" id="img_8" name="img_8" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Upload Image 9</label>
                        <input type="file" id="img_9" name="img_9" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="registerbtn" class="btn btn-primary" type="submit" value="SUBMIT">Save</button>
                    </div>



            </form>

        </div>

    </div>
</div>
</div>