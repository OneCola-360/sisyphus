<?php 
require("../konek.php");
include("header.php");

$sqluserid = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM users"), MYSQLI_ASSOC);
foreach ($sqluserid as $oo) {}
$user_id = intval($oo['id']) + 1;
echo $user_id;

$role = $_POST["role"] ?? "nn";
if ($role == "nn"):
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data gagal ditambahkan</h3>
                </div>
                <div class="card-body">
                    <form action="../create_new/admin_input.php">
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
endif;
if ($role == "nn") return;
$username = $_POST["username"] ?? "nn";
$password = $_POST["password"] ?? "nn";

if ($username !== "nn" || $role !== "nn" || $password !== "nn") {
    
    mysqli_query($konek, "INSERT INTO users (id, username, password, role) VALUES (" . $user_id . ",'" . $username . "','" . $password . "','" . $role . "')");
} else return;

if ($role == "admin"):
    $nik = $_POST["nip"] ?? "nn";
    $nama = $_POST["nama"] ?? "nn";
    $jk = $_POST["jk"] ?? "nn";

    if ($nik !== "nn" && $nama !== "nn"  && $jk !== "nn") {
        $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM guru"), MYSQLI_ASSOC);
        foreach ($sqlid as $i) {}
        $id = $i['id'] + 1;

        mysqli_query($konek, "INSERT INTO guru (id, nip, nama, jenis_kelamin, user_id) VALUES (" . $id . "," . $nik . ",'" . $nama . "','" . $jk . "'," . $user_id . ")");
    }
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil ditambahkan</h3>
                </div>
                <div class="card-body">
                    <h3>Akun Admin dan Data Admin sudah ditambahkan</h3>
                    <form action="../create_new/admin_input.php">
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
endif;
if ($role == "siswa"):
    $nik = $_POST["nis"] ?? "nn";
    $nama = $_POST["nama"] ?? "nn";
    $kelas = $_POST["kelas"] ?? "nn";
    $jk = $_POST["jk"] ?? "nn";

    if ($nik !== "nn" && $nama !== "nn" && $kelas !== "nn" && $jk !== "nn") {
        $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM siswa"), MYSQLI_ASSOC);
        foreach ($sqlid as $i) {}
        $id = $i['id'] + 1;

        mysqli_query($konek, "INSERT INTO siswa (id, nis, nama, kelas, jenis_kelamin, user_id) VALUES (" . $id . "," . $nik . ",'" . $nama . "','" . $kelas . "','" . $jk . "'," . $user_id . ")");
    }
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil ditambahkan</h3>
                </div>
                <div class="card-body">
                    <h3>Akun Siswa dan Data Siswa sudah ditambahkan</h3>
                    <form action="../create_new/siswa_input.php">
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
endif;
if ($role == "guru"):
    $nik = $_POST["nip"] ?? "nn";
    $nama = $_POST["nama"] ?? "nn";
    $jk = $_POST["jk"] ?? "nn";

    if ($nik !== "nn" && $nama !== "nn" && $jk !== "nn") {
        $sqlid = mysqli_fetch_all(mysqli_query($konek, "SELECT id FROM guru"), MYSQLI_ASSOC);
        foreach ($sqlid as $i) {}
        $id = $i['id'] + 1;

        mysqli_query($konek, "INSERT INTO guru (id, nip, nama, jenis_kelamin, user_id) VALUES (" . $id . "," . $nik . ",'" . $nama . "','" . $jk . "'," . $user_id . ")");
    }
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil ditambahkan</h3>
                </div>
                <div class="card-body">
                    <h3>Akun Guru dan Data Guru sudah ditambahkan</h3>
                    <form action="../create_new/guru_input.php">
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