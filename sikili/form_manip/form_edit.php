<?php 
include("header.php");

$id = $_GET['id'];
$role = $_GET['role'] ?? 'admin';
if ($role == 'admin'):
?>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Edit Data</h3>
        </div>
        <div class="card-body">
            <form action="../aksi/akun/aksi_edit.php" method="post">
                <h4>Data Akun Admin</h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="<?= $_GET['username']; ?>" value="<?= $_GET['username']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password Untuk Melanjutkan" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="admin" style="display: none;" name="role" id="role">
                <input type="text" value="<?= $_GET['id']; ?>" style="display: none;" name="id" id="id" readonly>
                <input type="text" value="<?= $_GET['password']; ?>" style="display: none;" name="org_pass" id="org_pass" readonly>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
elseif ($role == 'siswa'):
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Guru</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Edit Data</h3>
        </div>
        <div class="card-body">
            <h4>Data Siswa <?= $_GET['nama']; ?></h4>
            <hr>
            <form action="../aksi/akun/aksi_edit.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Siswa</label>
                    <input type="number" class="form-control" name="nis" placeholder="<?= $_GET['nis']; ?>" value="<?= $_GET['nis']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap Siswa</label>
                    <input type="text" class="form-control" name="nama" placeholder="<?= $_GET['nama']; ?>" value="<?= $_GET['nama']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kelas Siswa</label>
                    <input type="text" class="form-control" name="kelas" placeholder="<?= $_GET['kelas']; ?>" value="<?= $_GET['kelas']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin saat ini: "<?= $_GET['jk']; ?>"</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" id="laki">
                        <label class="form-check-label" for="laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <hr>
                <h4>Data Akun <?= $_GET['nama']; ?></h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="<?= $_GET['username']; ?>" value="<?= $_GET['username']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password Untuk Melanjutkan" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="siswa" style="display: none;" name="role" id="role">
                <input type="text" value="<?= $_GET['id']; ?>" style="display: none;" name="id" id="id" readonly>
                <input type="text" value="<?= $_GET['password']; ?>" style="display: none;" name="org_pass" id="org_pass" readonly>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php elseif ($role == "guru"): ?>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Edit Data</h3>
        </div>
        <div class="card-body">
            <h4>Data Guru <?= $_GET['nama']; ?></h4>
            <hr>
            <form action="../aksi/akun/aksi_edit.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Nomor Induk Pengajar</label>
                    <input type="number" class="form-control" name="nip" placeholder="<?= $_GET['nip']; ?>" value="<?= $_GET['nip']; ?>"  required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap Guru</label>
                    <input type="text" class="form-control" name="nama" placeholder="<?= $_GET['nama']; ?>" value="<?= $_GET['nama']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin saat ini: <?= $_GET['jk']?></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" id="laki">
                        <label class="form-check-label" for="laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" id="perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <h4>Data Akun <?= $_GET['nama']; ?></h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="<?= $_GET['username']; ?>" value="<?= $_GET['username']; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukan Password Untuk Melanjutkan" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="guru" style="display: none;" name="role" id="role">
                <input type="text" value="<?= $_GET['id']; ?>" style="display: none;" name="id" id="id" readonly>
                <input type="text" value="<?= $_GET['password']; ?>" style="display: none;" name="org_pass" id="org_pass" readonly>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
endif;
?>