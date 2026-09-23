<?php
include("../konek.php");
include("header.php");

$sql = "SELECT mapel.id, kode_mapel, mapel.nama, guru_id, guru.nama AS nama_guru
FROM mapel
LEFT JOIN guru ON mapel.guru_id = guru.id
ORDER BY mapel.id asc;";

$mapelsql = mysqli_query($konek, $sql);

$mapel = mysqli_fetch_all($mapelsql, MYSQLI_ASSOC);

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
                                <th scope="col">Kode Mapel</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Guru</th>
                                <th scope="col">Aksi</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php if (count($mapel) > 0): ?>
                                <?php foreach($mapel as $i): ?>
                                    <tr>
                                        <td><?= $o++; ?></td>
                                        <td><?= $i['kode_mapel']; ?></td>
                                        <td><?= $i['nama']; ?></td>
                                        <td><?= $i['nama_guru']; ?></td>
                                        <td>
                                            <a href="../form_manip/form_edit_mapel.php?id=<?= $i['id']; ?>&&kode=<?= $i['kode_mapel']; ?>&&nama=<?= $i['nama']; ?>&&guru=<?= $i['nama_guru']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="../aksi/mapel/aksi_hapus.php?id=<?= $i['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</a>
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