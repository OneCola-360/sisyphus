<?php
require("../konek.php");

$id = $_GET['id'];
$role = $_GET['role'];

/*$sql = "DELETE users, siswa FROM users JOIN siswa ON siswa.user_id = users.id WHERE users.id = $id */ 

if ($role == "guru" || $role == "admin") {
    mysqli_query($konek, "DELETE users, guru FROM users JOIN guru ON users.id = guru.user_id WHERE users.id =" . $id);
    if (mysqli_query($konek, "DELETE users, guru FROM users JOIN guru ON users.id = guru.user_id WHERE users.id = $id")) {
        echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
    } else {
        echo"<script>alert('User gagal dihapus'); window.location.href='../users.php'</script>";
    }
} 
if ($role == "siswa") {
    mysqli_query($konek, "DELETE users, siswa FROM users JOIN siswa ON users.id = siswa.user_id WHERE users.id =" . $id);
    if (mysqli_query($konek, "DELETE users, siswa FROM users JOIN siswa ON users.id = siswa.user_id WHERE users.id =" . $id)) {
        echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
    } else {
        echo"<script>alert('User gagal dihapus'); window.location.href='../users.php'</script>";
    }
}
?>