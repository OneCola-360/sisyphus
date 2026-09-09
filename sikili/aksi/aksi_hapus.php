<?php
require_once("../konek.php");

$id = $_GET['id'];
$role = $_GET['role'];

/*$sql = "DELETE users, siswa FROM users JOIN siswa ON siswa.user_id = users.id WHERE users.id = $id */ 

if ($role == "guru" || $role == "admin") {
    mysqli_query($konek, "DELETE users, guru FROM users JOIN guru ON guru.user_id = users.id WHERE users.id = $id");
    echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
} else if ($role == "siswa") {
    mysqli_query($konek, "DELETE users, siswa FROM users JOIN siswa ON siswa.user_id = users.id WHERE users.id = $id");    
    echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
}
?>