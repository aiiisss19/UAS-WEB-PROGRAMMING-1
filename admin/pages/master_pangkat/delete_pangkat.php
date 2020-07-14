<?php
include "../../../config.php";

$mySql = "UPDATE pangkat SET deleted=1 WHERE id_pangkat='".$_GET['id_pangkat']."'";
$myQry = mysqli_query($conn, $mySql);
session_start();
$id 	= $_SESSION['id_user'];
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Pangkat', NOW())");
header('location:../../?hal=master_pangkat');
?>
