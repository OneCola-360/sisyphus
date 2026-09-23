<?php 
require("../konek.php"); 
include("header.php");

$sqlguru = "SELECT nama, id FROM guru";
$gurus = mysqli_query($konek, $sqlguru);
?>
<body class="bg-light">
<div class="container mt-5" style="width=50%">
    <div class="card shadow">
        <div class="card-header">
            <h3>Form Tambah Mapel</h3>
        </div>
        <div class="card-body">
            <form action="../aksi/mapel/aksi_mapel.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Kode Mapel</label>
                    <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode. Contoh: MP01" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Mapel</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama. Contoh: PIPAS" required>
                </div>
                <div class="mb-3">
                    <div class="dropdown">
                        <select name="guru" id="guru" class="btn btn-secondary">
                            <?php foreach($gurus as $i): ?>
                                <li><option value="<?= $i['id']; ?>"><?= $i['nama']; ?></option></li>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Kembali</button>
                </div>
                <input type="text" name="role" id="role" value="admin" style="display: none;" readonly>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
