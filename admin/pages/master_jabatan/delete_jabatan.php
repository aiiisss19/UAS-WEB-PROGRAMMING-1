<?php
include "../../../config.php";
session_start();
$id 	= $_SESSION['id_user'];
$mySql = "UPDATE jabatan SET deleted=1 WHERE id_jabatan='".$_GET['id_jabatan']."'";
$myQry = mysqli_query($conn, $mySql);
  mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Jabatan', NOW())");
// header('location:/delta/admin/?hal=master_jabatan');
header('location:../../?hal=master_jabatan');
?>
