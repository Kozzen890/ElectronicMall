<?php
include_once("helper/koneksi.php");

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tamu WHERE id='$id'");

header("LOCATION: bukutamu.php");

?>