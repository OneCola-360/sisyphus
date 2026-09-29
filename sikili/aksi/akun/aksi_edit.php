<?php 
require("../../konek.php");
include("header.php");

$id = $_POST['id'];
$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];
$org_pass = $_POST['org_pass'];

if ($password == $org_pass):
    mysqli_query($konek, "UPDATE users SET role = '$role', username = '$username'  WHERE users.id = $id");
    if ($role == "guru") {
        mysqli_query($konek, "UPDATE guru SET nip = '$role', nama = '" . $_POST['nama'] . "', jenis_kelamin = '" . $_POST['jk'] . "'  WHERE guru.user_id = $id");
    }
    if ($role == "siswa") {
        mysqli_query($konek, "UPDATE siswa SET nis = '$role', nama = '" . $_POST['nama'] . "', kelas = '" . $_POST['kelas'] . "',jenis_kelamin = '" . $_POST['jk'] . "'  WHERE siswa.user_id = $id");
    }
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil diubah</h3>
                </div>
                <div class="card-body">
                    <form action="../../tabel/users.php">
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
                    <form action="../../tabel/users.php">
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