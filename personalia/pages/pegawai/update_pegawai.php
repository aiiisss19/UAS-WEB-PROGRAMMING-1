<?php
include "../../../config.php";


session_start();
$id 	= $_SESSION['id_user'];
// informasi pegawai
$nip = $_GET['nip'];

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


$sqlPegawai = "UPDATE pegawai SET
  nama_pegawai='$nm_pegawai', email='$email', tempat_lahir='$tpt_lhr', tanggal_lahir='$tgl_lhr', jk='$jk', agama='$agama', alamat='$alamat', no_hp='$no_hp', updated_by='$id', updated_at=NOW() WHERE nip='$nip'";
$simpanPegawai = mysqli_query($conn, $sqlPegawai);

$sqlSkKerja="UPDATE sk_kerja SET no_sk='$no_sk', id_jabatan='$id_jabatan', id_lokasi='$id_lokasi', id_pangkat='$id_pangkat', id_unit_kerja='$id_unit_kerja', updated_by='$id', updated_at=NOW() WHERE nip='$nip'";
$simpanSkKerja = mysqli_query($conn, $sqlSkKerja);

$sqlPendidikan = "UPDATE pendidikan SET jenjang='$jenjang1', nama_pendidikan='$namaSekolah1', tahun_pendidikan='$tahunSekolah1', updated_by='$id', updated_at=NOW() WHERE nip='$nip'";
$simpanPendidikan = mysqli_query($conn, $sqlPendidikan);

$sqlPekerjaan = "UPDATE pengalaman_kerja SET nama_kerja='$pekerjaan', nama_perusahaan='$namaPerusahaan', tahun_kerja='$tahunKerja', updated_by='$id', updated_at=NOW() WHERE nip='$nip'";
$simpanPekerjaan = mysqli_query($conn, $sqlPekerjaan);


mysqli_query($conn,"INSERT INTO log(id_user, aktifitas, tanggal) VALUES('$id', 'Update Pegawai', NOW())");

header('location:../../?hal=pegawai');


 ?>
