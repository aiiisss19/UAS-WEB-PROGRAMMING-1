<?php
include "../../../config.php";

session_start();
$id 	= $_SESSION['id_user'];

// informasi pegawai
$nip = $_POST['nip'];
$nm_pegawai = $_POST['nama'];
$email = $_POST['email'];
$jk = $_POST['jk'];
$tpt_lhr = $_POST['tempat_lahir'];
$tgl_lhr = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$agama = $_POST['agama'];
// informasi pekerjaan
$no_sk = $_POST['sk_kerja'];
$id_pangkat = $_POST['pangkat'];
$id_lokasi = $_POST['lokasi'];
$id_jabatan = $_POST['jabatan'];
$id_unit_kerja = $_POST['unit_kerja'];
// informasi riwayat pendidikan
$jenjang1 = $_POST['jenjang'];
$namaSekolah1 = $_POST['nama_sekolah'];
$tahunSekolah1 = $_POST['tahun_sekolah'];

// informasi Riwayat Pekerjaan
$pekerjaan = $_POST['nama_pekerjaan'];
$namaPerusahaan = $_POST['nama_perusahaan'];
$tahunKerja = $_POST['tahun_kerja'];

$sqlPegawai = "INSERT INTO pegawai(nip, nama_pegawai, jk, tempat_lahir, tanggal_lahir, agama, no_hp, alamat, email, tanggal_masuk, created_by, created_at, updated_by, updated_at)
VALUES ('$nip', '$nm_pegawai', '$jk', '$tpt_lhr', '$tgl_lhr',  '$agama', '$no_hp', '$alamat', '$email', NOW(), '$id', NOW(), '$id', NOW())";
$simpanPegawai = mysqli_query($conn, $sqlPegawai);

$sqlSkKerja="INSERT INTO sk_kerja(no_sk, tanggal_sk, nip, id_jabatan, id_lokasi, id_pangkat, id_unit_kerja, created_by, created_at, updated_by, updated_at)
VALUES ('$no_sk', NOW(), '$nip', '$id_jabatan', '$id_lokasi', '$id_pangkat', '$id_unit_kerja', '$id', NOW(), '$id', NOW())";
$simpanSkKerja = mysqli_query($conn, $sqlSkKerja);

$sqlPendidikan = "INSERT INTO pendidikan(nip, jenjang, nama_pendidikan, tahun_pendidikan, created_by, created_at, updated_by, updated_at)
VALUES('$nip', '$jenjang1', '$namaSekolah1', '$tahunSekolah1', '$id', NOW(), '$id', NOW())";
$simpanPendidikan = mysqli_query($conn, $sqlPendidikan);

$sqlPekerjaan = "INSERT INTO pengalaman_kerja(nip, nama_kerja, nama_perusahaan, tahun_kerja, created_by, created_at, updated_by, updated_at)
VALUES('$nip', '$pekerjaan', '$namaPerusahaan', '$tahunKerja', '$id', NOW(), '$id', NOW())";
$simpanPekerjaan = mysqli_query($conn, $sqlPekerjaan);

mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Tambah Pegawai', NOW())");


header('location:../../?hal=pegawai');


 ?>
