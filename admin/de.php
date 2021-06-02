<?php
include_once("db_connect.php");
$result = '';
$result = mysqli_query($bdd, "SELECT * FROM schedule");
?>

<?php include("header.php") ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Demande d'Essai</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
            Add schedule
        </button>
    </div>
    <div class="table-responsive">

        <form class="uk-container">
            <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Nom...">
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
                    td = tr[i].getElementsByTagName("td")[1];
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
                    <th scope="col">Civilite</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Selection</th>
                    <th scope="col">Statue</th>
                    <th scope="col">Date</th>
                    <th scope="col">Email</th>
                    <th scope="col">SMS</th>
                    <th scope="col">Tel</th>
                    <th scope="col">License</th>
                    <th scope="col">Outils</th>

                </thead>
                <?php

                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $res['civilite'] . "</td>";
                    echo "<td>" . $res['nom'] . "</td>";
                    echo "<td>" . $res['prenom'] . "</td>";
                    echo "<td>" . $res['email'] . "</td>";
                    echo "<td>" . $res['num_tel'] . "</td>";
                    echo "<td>" . $res['selection'] . "</td>";
                    echo "<td>" . $res['statue'] . "</td>";
                    echo "<td>" . $res['schedule_date'] . "</td>";
                    echo "<td>" . $res['c_email'] . "</td>";
                    echo "<td>" . $res['c_sms'] . "</td>";
                    echo "<td>" . $res['c_tel'] . "</td>";
                    echo "<td>" . $res['license'] . "</td>";

                    echo "<td><a href=\"edits.php?id=$res[idclient]\">Edit</a> | <a href=\"deletes.php?id=$res[idclient]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
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

<!-- Modal Add Schedule -->

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="adds.php" method="POST">

                <div class="modal-body">

                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="form-group">
                                    <label>Civilité</label>
                                    <select class="form-control" name="civilite">
                                        <option value="Mr">Mr</option>
                                        <option value="Mme">Mme</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="nom" class="form-control" placeholder="Entrer votre nom">
                                </div>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" class="form-control" placeholder="Entrer votre prénom">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control checking_email" placeholder="Entrer votre email">
                                    <small class="error_email" style="color: red;"></small>
                                </div>

                                <div class="form-group">
                                    <label>Numero télephone </label>
                                    <input type="text" name="num_tel" class="form-control" placeholder="Entrer votre numero télephone">
                                </div>

                                <div class="form-group">
                                    <label>Sélectionez votre vehicule</label>
                                    <select class="form-control" name="selection">
                                        <option value="BMW 3.0CSL">BMW 3.0CSL</option>
                                        <option value="BMW 2002">BMW 2002</option>
                                        <option value="BMW 2002 A">BMW 2002 A</option>
                                        <option value="BMW E3 3.3LIA">BMW E3 3.3LIA</option>
                                        <option value="BMW E30 M3">BMW E30 M3</option>
                                        <option value="ALPINE GTA V6 TURBO">ALPINE GTA V6 TURBO</option>
                                        <option value="FORD CAPRI STAMPEDE">FORD CAPRI STAMPEDE</option>
                                        <option value="PORCHE 968 COUPE">PORCHE 968 COUPE</option>
                                        <option value="PORCHE 356B 1600S">PORCHE 356B 1600S</option>
                                        <option value="PORCHE 930 TURBO">PORCHE 930 TURBO</option>
                                        <option value="PORCHE 944 S2">PORCHE 944 S2</option>
                                        <option value="PORCHE 964 3.6 TURBO">PORCHE 964 3.6 TURBO</option>
                                        <option value="PORCHE 964 C2 CAB WTL">PORCHE 964 C2 CAB WTL</option>
                                        <option value="PORCHE 993 GT2 EVO">PORCHE 993 GT2 EVO</option>
                                        <option value="FERRARI DINO 246/GT">FERRARI DINO 246/GT</option>
                                        <option value="FERRARI MARANELLO">FERRARI MARANELLO</option>
                                        <Option value="RENAULT CLIO WILLIAMS 2">RENAULT CLIO WILLIAMS 2</Option>
                                        <option value="ALFA ROMEO S.Z">ALFA ROMEO S.Z</option>
                                        <option value="ALFA ROMEO S.Z A">ALFA ROMEO S.Z A</option>
                                        <option value="MERCEDES SL 320">MERCEDES SL 320</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Statue Demande D'essai</label>
                                    <select class="form-control" name="statue">
                                        <option value="Reservé">Reservé</option>
                                        <option value="En cours">En cours</option>
                                        <option value="Terminé">Terminé</option>
                                    </select>
                                </div>

                            </div>


                            <div class="col">

                                <div class="form-group">
                                    <label>Date </label>
                                    <input type="date" name="schedule_date" class="datepicker form-control" placeholder="Select Date" id="datepicker" class="form-control" placeholder="Selecter une date">
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="radio2"> Contactez moi par Email <br>
                                        <input type="radio" class="form-check-input" id="oui" name="c_email" <?php if (isset($c_email) && $c_email == "oui") echo "checked"; ?> value="oui">Oui <br>
                                        <input type="radio" class="form-check-input" id="non" name="c_email" <?php if (isset($c_email) && $c_email == "non") echo "checked"; ?> value="non">Non <br><br>
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="radio2"> Contactez moi par Message <br>
                                        <input type="radio" class="form-check-input" id="oui" name="c_sms" <?php if (isset($c_sms) && $c_sms == "oui") echo "checked"; ?> value="oui">Oui <br>
                                        <input type="radio" class="form-check-input" id="non" name="c_sms" <?php if (isset($c_sms) && $c_sms == "non") echo "checked"; ?> value="non">Non <br> <br>
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="radio2"> Contactez moi par Télephone <br>
                                        <input type="radio" class="form-check-input" id="oui" name="c_tel" <?php if (isset($c_tel) && $c_tel == "oui") echo "checked"; ?> value="oui">Oui <br>
                                        <input type="radio" class="form-check-input" id="non" name="c_tel" <?php if (isset($c_tel) && $c_tel == "non") echo "checked"; ?> value="non">Non <br> <br>
                                    </label>
                                </div>

                                <div class="form-check-inline">
                                    <label class="form-check-label" for="radio2"> Agé de 18 ans + permis de conduire <br>
                                        <input type="radio" class="form-check-input" id="oui" name="license" <?php if (isset($license) && $license == "oui") echo "checked"; ?> value="oui">Oui <br>
                                        <input type="radio" class="form-check-input" id="non" name="license" <?php if (isset($license) && $license == "non") echo "checked"; ?> value="non">Non <br> <br>
                                    </label>
                                </div>






                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <!-- <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button style="margin-right:370px" type="submit" name="registerbtn" class="btn btn-primary" type="submit" value="SUBMIT">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>