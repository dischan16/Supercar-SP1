<?php
include_once("db_connect.php");
$result = '';
$result = mysqli_query($bdd, "SELECT * FROM voiture");
?>

<?php include("header.php") ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Voiture</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image_upload">
            Add Voiture
        </button>
    </div>
    <div class="table-responsive">

        <form class="uk-container">
            <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Make...">
        </form> <br>

        <script>
            function myFunction() {
                // Declare variables
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");

                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[2];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

        <div class="table-responsive">
            <table class="table table-hover" id="myTable">
                <thead class="thead-dark">
                    <th scope="col">#</th>
                    <th scope="col">Image </th>
                    <th scope="col">Make </th>
                    <th scope="col">Prix </th>
                    <th scope="col">M_Title </th>
                    <th scope="col">Modele </th>
                    <th scope="col">Type </th>
                    <th scope="col">Annee </th>
                    <th scope="col">Couleur </th>
                    <th scope="col">Moteur </th>
                    <th scope="col">Transmission </th>
                    <th scope="col">Cyclindre </th>
                    <th scope="col">Capacite </th>
                    <th scope="col">Jante </th>
                    <th scope="col">interieur </th>
                    <th scope="col">kilometrage </th>
                    <th scope="col">Sommaire </th>
                    <th scope="col">Exterieur </th>
                    <th scope="col">Interieur </th>
                    <th scope="col">Moteur </th>
                    <th scope="col">Detail </th>
                    <th scope="col">Status </th>
                    <th scope="col">Img_1 </th>
                    <th scope="col">Img_2 </th>
                    <th scope="col">Img_3 </th>
                    <th scope="col">Img_4 </th>
                    <th scope="col">Img_5 </th>
                    <th scope="col">Img_6 </th>
                    <th scope="col">Outils </th>

                </thead>
                <?php
                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $res['id'] . "</td>";
                    echo '<td> <img src="upload/' . $res['image'] . '" width = "200"" alt="Image"> </td>';
                    echo "<td>" . $res['make'] . "</td>";
                    echo "<td>" . $res['prix'] . "</td>";
                    echo "<td>" . $res['m_make'] . "</td>";
                    echo "<td>" . $res['modele'] . "</td>";
                    echo "<td>" . $res['type'] . "</td>";
                    echo "<td>" . $res['annee'] . "</td>";
                    echo "<td>" . $res['couleur'] . "</td>";
                    echo "<td>" . $res['moteur'] . "</td>";
                    echo "<td>" . $res['transmission'] . "</td>";
                    echo "<td>" . $res['cyclindre'] . "</td>";
                    echo "<td>" . $res['capacite'] . "</td>";
                    echo "<td>" . $res['jante'] . "</td>";
                    echo "<td>" . $res['interieur'] . "</td>";
                    echo "<td>" . $res['km'] . "</td>";
                    echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['descrip_s'] . "</td>";
                    echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['descrip_e'] . "</td>";
                    echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['descrip_i'] . "</td>";
                    echo "<td class='text-truncate' style='max-width: 200px;'>" . $res['descrip_m'] . "</td>";
                    echo "<td  class='text-truncate' style='max-width: 200px;'>" . $res['detail'] . "</td>";
                    echo "<td>" . $res['status'] . "</td>"; 
                    echo '<td> <img src="upload/' . $res['img_1'] . '"width = "200" alt="Image"> </td>';
                    echo '<td> <img src="upload/' . $res['img_2'] . '"width = "200" alt="Image"> </td>';
                    echo '<td> <img src="upload/' . $res['img_3'] . '"width = "200"alt="Image"> </td>';
                    echo '<td> <img src="upload/' . $res['img_4'] . '"width = "200" alt="Image"> </td>';
                    echo '<td> <img src="upload/' . $res['img_5'] . '"width = "200" alt="Image"> </td>';
                    echo '<td> <img src="upload/' . $res['img_6'] . '"width = "200" alt="Image"> </td>';

                    echo "<td><a href=\"editv.php?id=$res[id]\">Edit</a> | <a href=\"deletev.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
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
                <h5 class="modal-title" id="exampleModalLabel">Add Voiture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="addv.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Make</label>
                        <input type="text" name="make" class="form-control" placeholder="Enter Make">
                    </div>

                    <div class="form-group">
                        <label>Prix</label>
                        <input type="text" name="prix" class="form-control" placeholder="Enter Prix">
                    </div>

                    <div class="form-group">
                        <label>m_make</label>
                        <input type="text" name="m_make" class="form-control" placeholder="Enter m_make">
                    </div>

                    <div class="form-group">
                        <label>Modele</label>
                        <input type="text" name="modele" class="form-control" placeholder="Enter modele">
                    </div>

                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Enter type">
                    </div>

                    <div class="form-group">
                        <label>Annee</label>
                        <input type="text" name="annee" class="form-control" placeholder="Enter annee">
                    </div>

                    <div class="form-group">
                        <label>Couleur</label>
                        <input type="text" name="couleur" class="form-control" placeholder="Enter couleur">
                    </div>

                    <div class="form-group">
                        <label>Moteur</label>
                        <input type="text" name="moteur" class="form-control" placeholder="Enter moteur">
                    </div>

                    <div class="form-group">
                        <label>Transmission</label>
                        <input type="text" name="transmission" class="form-control" placeholder="Enter transmission">
                    </div>

                    <div class="form-group">
                        <label>Cyclindre</label>
                        <input type="text" name="cyclindre" class="form-control" placeholder="Enter Cyclindre">
                    </div>

                    <div class="form-group">
                        <label>Capacite</label>
                        <input type="text" name="capacite" class="form-control" placeholder="Enter capacite">
                    </div>

                    <div class="form-group">
                        <label>Jante</label>
                        <input type="text" name="jante" class="form-control" placeholder="Enter jante">
                    </div>

                    <div class="form-group">
                        <label>Interieur</label>
                        <input type="text" name="interieur" class="form-control" placeholder="Enter interieur">
                    </div>

                    <div class="form-group">
                        <label>Kilometrage</label>
                        <input type="text" name="km" class="form-control" placeholder="Enter kilometrage">
                    </div>

                    <div class="form-group">
                        <label>D_Sommaire</label>
                        <textarea name="descrip_s" class="form-control" placeholder="Enter Sommaire"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>D_Exterieur</label>
                        <textarea name="descrip_e" class="form-control" placeholder="Enter Exterieur"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>D_interieur</label>
                        <textarea name="descrip_i" class="form-control" placeholder="Enter interieur"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>D_Moteur</label>
                        <textarea name="descrip_m" class="form-control" placeholder="Enter moteur"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>Detail</label>
                        <textarea name="detail" class="form-control" placeholder="Enter detail"> </textarea>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <div class id="status" name="status">
                            <label><input class="uk-radio" type="radio" value="Active" name="status"> Active</label><br>
                            <label><input class="uk-radio" type="radio" value="Inactive" name="status"> Inactive</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>img_1</label>
                        <input type="file" id="img_1" name="img_1" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>img_2</label>
                        <input type="file" id="img_2" name="img_2" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>img_3</label>
                        <input type="file" id="img_3" name="img_3" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>img_4</label>
                        <input type="file" id="img_4" name="img_4" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>img_5</label>
                        <input type="file" id="img_5" name="img_5" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>img_6</label>
                        <input type="file" id="img_6" name="img_6" class="form-control">
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