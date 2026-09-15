<?php 
require("../konek.php"); 
include("../header.php");

$id = $_GET['id'];
$role = $_GET['role'];
if ($role == 'guru' || $role == 'admin'):
?>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Tambah Admin</h3>
        </div>
        <div class="card-body">
            <form action="../aksi/aksi_edit.php" method="post">
                <h4>Data Akun <?= $_GET['nama']; ?></h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="<?= $_GET['username']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="<?= $_GET['password']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Role saat ini: <?= $role ?></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="admin" id="role">
                        <label class="form-check-label" for="admin">
                            Admin
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" value="guru" id="role">
                        <label class="form-check-label" for="guru">
                            Guru
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="<?= $_GET['id']; ?>" style="display: none;" name="id" id="id">
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
            <h3>Form Tambah Admin</h3>
        </div>
        <div class="card-body">
            <form action="../aksi/aksi_edit.php" method="post">
                <h4>Data Akun <?= $_GET['nama']; ?></h4>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="<?= $_GET['username']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="<?= $_GET['password']; ?>" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" value="siswa" style="display: none;" name="role" id="role">
                <input type="text" value="<?= $_GET['id']; ?>" style="display: none;" name="id" id="id">
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