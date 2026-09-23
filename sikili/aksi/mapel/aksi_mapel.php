<?php 
require("../../konek.php");
include("header.php");

$sqlmapelid = mysqli_fetch_all(mysqli_query($konek, "SELECT * FROM mapel"), MYSQLI_ASSOC);
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$guru = $_POST['guru'];
foreach ($sqlmapelid as $o) {}
$mapel_id = count($sqlmapelid) >= 1 ? intval($o['id']) + 1 : count($sqlmapelid) + 1;

mysqli_query($konek, "INSERT INTO mapel (id, kode_mapel, nama, guru_id) VALUES (" . $mapel_id . ",'" . $kode . "','" . $nama . "','" . $guru . "')");
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data Berhasil ditambahkan</h3>
                </div>
                <div class="card-body">
                    <form action="../../create_new/mapel_input.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>