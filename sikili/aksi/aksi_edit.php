<?php 
require("../konek.php");
include("header.php");

$id = $_POST['id'];
$role = $_POST['role'] ?? "guru";
$username = $_POST['username'];
$password = $_POST['password'];
$org_pass = $_POST['org_pass'];

if ($password == $org_pass):
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
<?php 
else:
?>
<body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data gagal diubah</h3>
                </div>
                <div class="card-body">
                    <h5>Password Salah</h5>
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
<?php endif; ?>