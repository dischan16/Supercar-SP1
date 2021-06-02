<?php
include_once("db_connect.php");
$result = '';
$result = mysqli_query($bdd, "SELECT * FROM service");
?>

<?php include("header.php") ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Service</h3>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image_upload">
                        Add Service
                    </button> -->
    </div>
    <div class="table-responsive">



        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <th scope="col">Title</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Paragraph 1</th>
                    <th scope="col">Paragraph 2</th>
                    <th scope="col">Paragraph 3</th>
                    <th scope="col">Outils</th>
                </thead>
                <?php

                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $res['title'] . "</td>";
                    echo '<td> <img src="upload/' . $res['images'] . '" width = "150px;" height="100px;" alt="Image"> </td>';
                    echo "<td>" . $res['p1'] . "</td>";
                    echo "<td>" . $res['p2'] . "</td>";
                    echo "<td>" . $res['p3'] . "</td>";
                    echo "<td><a href=\"edite.php?id=$res[id]\">Edit</a>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
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

<!-- Image upload Modal -->

<div class="modal fade" id="image_upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adde.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" id="images" name="images" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph_1</label>
                        <input type="text" name="p1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph_2</label>
                        <input type="text" name="p2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph_3</label>
                        <input type="text" name="p3" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
                    <button type="submit" name="save_faculty" class="btn btn-primary"> Save </button>
                </div>
            </form>

        </div>
    </div>
</div>