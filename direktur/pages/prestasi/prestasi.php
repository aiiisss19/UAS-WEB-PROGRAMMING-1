<?php
  include_once("../config.php");
 ?>

<div class="page-header">
  <h1 class="page-title">Tabel Prestasi Pegawai</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="?hal=prestasi">Data Prestasi Pegawai</a></li>
  </ol>
</div>

<div class="page-content container-fluid">
  <!-- Panel Table Tools -->
  <div class="panel panel-primary">
    <header class="panel-heading">
      <div class="row">
        <div style="width:30px;">
        </div>
        <h5 class="panel-title"><i class="icon md-thumb-up" aria-hidden="true"></i>Data Prestasi</a>
      </div>
    </header>
    <div class="panel-body">
      <div style="height:10px;"></div>
      <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Tanggal Prestasi</th>
            <th>Prestasi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Tanggal Prestasi</th>
            <th>Prestasi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $queryPrestasi = "SELECT *
          FROM prestasi, pegawai, jabatan, sk_kerja
          WHERE prestasi.nip=pegawai.nip and prestasi.nip=sk_kerja.nip and sk_kerja.id_jabatan=jabatan.id_jabatan and prestasi.deleted=0 and pegawai.deleted=0 order by id_prestasi";
          $sqlPrestasi = mysqli_query($conn, $queryPrestasi);
          $no=1;
          while($rowPrestasi=mysqli_fetch_array($sqlPrestasi)){
          ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><b><a href="?hal=detail_pegawai&nip=<?php echo $rowPrestasi['nip']; ?>" title="lihat detail pegawai"><?php echo $rowPrestasi['nip'] ?></a></b></td>
          <td><?php echo $rowPrestasi['nama_pegawai']; ?></td>
          <td><?php echo $rowPrestasi['nama_jabatan']; ?></td>
          <td><?php echo $rowPrestasi['tanggal_prestasi']; ?></td>
          <td><?php echo $rowPrestasi['nama_prestasi']; ?></td>
        </tr>
          <?php
            $no++;
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Panel Table Tools -->

</div>
