<?php
include "../../../config.php";


$id_hukuman = $_GET['id_hukuman'];

$sqlHukuman = "UPDATE hukuman SET deleted=1 WHERE id_hukuman='$id_hukuman'";
$simpanHukuman = mysqli_query($conn, $sqlHukuman);

session_start();
$id 	= $_SESSION['id_user'];
mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Hapus Hukuman', NOW())");
header('location:../../?hal=hukuman');
?>
