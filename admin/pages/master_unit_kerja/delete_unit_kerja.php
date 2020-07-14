<?php
include "../../../config.php";

$mySql = "UPDATE unit_kerja SET deleted=1 WHERE id_unit_kerja='".$_GET['id_unit_kerja']."'";
$myQry = mysqli_query($conn, $mySql);

session_start();
$id 	= $_SESSION['id_user'];
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Unit Kerja', NOW())");

header('location:../../?hal=master_unit_kerja');
?>
