<?php
require("../../konek.php");
include("header.php");

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$guru = $_POST['guru'];
$id = $_POST['id'];

mysqli_query($konek, "UPDATE mapel SET kode_mapel = '$kode', nama = '$nama', guru_id = $guru WHERE id = $id");
?>
    <body>
        <div class="container mt-5" style="width=50%">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Data berhasil diubah</h3>
                </div>
                <div class="card-body">
                    <form action="../../tabel/mapel.php">
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>