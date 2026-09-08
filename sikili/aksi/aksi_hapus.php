<?php
require_once("../konek.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id'";

if (mysqli_query($konek, $sql)) {
    echo"<script>alert('User berhasil dihapus'); window.location.href='../users.php'</script>";
} else {
    echo"<script>alert('User gagal dihapus'); window.location.href='../users.php'</script>";
}
?>