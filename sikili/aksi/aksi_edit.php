<?php 
require("../konek.php");
include("header.php");

$id = $_POST['id'];
$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($konek, "UPDATE users SET role = '$role', username = '$username', password = '$password' WHERE users.id = $id");
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil diubah</h3>
                </div>
                <div class="card-body">
                    <form action="../users.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>