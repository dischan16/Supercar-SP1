<?php
include_once("db_connect.php");
$result = '';
$result = mysqli_query($bdd, "SELECT * FROM contactn");
?>

<?php include("header.php") ?>
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Contact</h3>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile3">
            Add contact
        </button>
    </div>
    <div class="table-responsive">

        <form class="uk-container">
            <input class="form-control uk-input uk-width-1-1" id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Contact...">
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
                    td = tr[i].getElementsByTagName("td")[0];
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
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Outils</th>

                </thead>
                <?php

                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $res['nom'] . "</td>";
                    echo "<td>" . $res['email'] . "</td>";
                    echo "<td>" . $res['message'] . "</td>";

                    echo "<td><a href=\"editc.php?id=$res[idclient]\">Edit</a> | <a href=\"deletec.php?id=$res[idclient]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";
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


<div class="modal fade" id="addadminprofile3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="addc.php" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control" placeholder="Entrer votre Nom">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Entrer votre Email">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <input type="text" name="message" class="form-control" placeholder="Entrer votre Message">
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group ">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input style="margin-right: 170px" type="reset" class="btn btn-danger" value="Reset">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>










</html>