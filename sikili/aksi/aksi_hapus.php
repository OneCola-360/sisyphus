<?php
require_once("../konek.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

/*$sql = "DELETE users, siswa FROM users JOIN siswa ON siswa.user_id = users.id WHERE users.id = $id */ 

if (mysqli_query($konek, $sql)) {
    echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
} else {
    echo"<script>alert('User gagal dihapus'); window.location.href='../users.php'</script>";
}
?>