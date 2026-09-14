<?php 
require("../konek.php");

$id = $_POST['id'];
$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($konek, "UPDATE users SET role = $role, username = $username, password = $password WHERE id = $id");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Action</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
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