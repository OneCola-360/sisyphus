<?php
include("../konek.php");
include("header.php");

$sql = "SELECT users.id, username, role, password, created_at, nis, kelas, nip, guru.user_id, siswa.user_id,
COALESCE (siswa.nama, guru.nama) AS nama, COALESCE (guru.jenis_kelamin, siswa.jenis_kelamin) AS jk
FROM users
LEFT JOIN siswa ON users.id = siswa.user_id
LEFT JOIN guru ON users.id = guru.user_id
ORDER BY users.id asc;";

$usersql = mysqli_query($konek, $sql);

$user = mysqli_fetch_all($usersql, MYSQLI_ASSOC);

$o = 1;
?>
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
                                        <td><?= $o++; ?></td>
                                        <td><?= $i['nama']; ?></td>
                                        <td><?= $i['username']; ?></td>
                                        <td><?= $i['role']; ?></td>
                                        <td>
                                            <a href="../form_manip/form_edit.php?id=<?= $i['id']; ?>&&role=<?= $i['role']; ?>&&username=<?= $i['username']; ?>&&password=<?= $i['password']; ?><?php if($i['role'] == 'siswa'):?>&&nis=<?= $i['nis']; ?>&&nama=<?= $i['nama']; ?>&&kelas=<?= $i['kelas']; ?>&&jk=<?= $i['jk']; ?><?php elseif ($i['role'] == 'guru'): ?>&&nip=<?= $i['nip']; ?>&&nama=<?= $i['nama']; ?>&&jk=<?= $i['jk']; ?><?php endif; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="../aksi/akun/aksi_hapus.php?id=<?= $i['id']; ?>&&role=<?= $i['role']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
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