<?php
require_once("../konek.php");

$id = $_GET["id"];

mysqli_query($konek, "DELETE FROM users WHERE id = '$id'");

?>