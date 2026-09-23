<?php
require("../../konek.php");

$id = $_GET['id'];

/*$sql = "DELETE users, siswa FROM users JOIN siswa ON siswa.user_id = users.id WHERE users.id = $id */ 
mysqli_query($konek, "DELETE FROM mapel WHERE mapel.id =" . $id);
if (mysqli_query($konek, "DELETE FROM mapel WHERE mapel.id =" . $id)) {
    echo"<script>alert('User berhasil dihapus'); window.location.href='../../tabel/mapel.php'</script>";
} else {
    echo"<script>alert('User gagal dihapus'); window.location.href='../../tabel/mapel.php'</script>";
}
?>