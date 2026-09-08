<?php
include("konek.php");

$sql = "SELECT *,
COALESCE (siswa.nama, guru.nama) AS nama
FROM users
LEFT JOIN siswa ON users.id = siswa.user_id
LEFT JOIN guru ON users.id = guru.user_id
ORDER BY users.id desc;";

$usersql = mysqli_query($konek, $sql);

$user = mysqli_fetch_all($usersql, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2>Tabel Users</h2>
                    <table id="tabelUser" class="table table-striped table-hover border">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10%;">No</th>
                                <th scope="col">User</th>
                                <th scope="col">Username</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php if (count($user) > 0): ?>
                                <?php foreach($user as $i): ?>
                                    <tr>
                                        <td>placeholder</td>
                                        <td><?= $i['nama']; ?></td>
                                        <td><?= $i['username']; ?></td>
                                        <td><?= $i['role']; ?></td>
                                        <td>
                                            <a href="form_manip/form_edit.php?id=<?= $i['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="aksi/aksi_hapus.php?id=<?= $i['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">Data Belum Di Isi</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>