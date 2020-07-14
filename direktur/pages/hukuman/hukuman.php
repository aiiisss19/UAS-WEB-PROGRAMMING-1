<?php
  include_once("../config.php");
 ?>

<div class="page-header">
  <h1 class="page-title">Tabel Hukuman Pegawai</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="?hal=hukuman">Data Hukuman Pegawai</a></li>
  </ol>
</div>

<div class="page-content container-fluid">
  <!-- Panel Table Tools -->
  <div class="panel panel-primary">
    <header class="panel-heading">

      <div class="row">
        <div style="width:30px;">
        </div>
        <h5 class="panel-title"><i class="icon md-thumb-down" aria-hidden="true"></i>Data Hukuman</a>
      </div>
    </header>
    <div class="panel-body">
      <div style="height:10px;"></div>
      <table class="table table-hover dataTable table-striped w-full"  id="exampleTableTools">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Tanggal Hukuman</th>
            <th>Hukuman</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Tanggal Hukuman</th>
            <th>Hukuman</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $queryHukuman = "SELECT *
          FROM hukuman, pegawai, jabatan, sk_kerja
          WHERE hukuman.nip=pegawai.nip and hukuman.nip=sk_kerja.nip and sk_kerja.id_jabatan=jabatan.id_jabatan and hukuman.deleted=0 and pegawai.deleted=0 order by id_hukuman";
          $sqlHukuman = mysqli_query($conn, $queryHukuman);
          $no=1;
          while($rowHukuman=mysqli_fetch_array($sqlHukuman)){
          ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><b><a href="?hal=detail_pegawai&nip=<?php echo $rowHukuman['nip']; ?>" title="lihat detail pegawai"><?php echo $rowHukuman['nip'] ?></a></b></td>
          <td><?php echo $rowHukuman['nama_pegawai']; ?></td>
          <td><?php echo $rowHukuman['nama_jabatan']; ?></td>
          <td><?php echo $rowHukuman['tanggal_hukuman']; ?></td>
          <td><?php echo $rowHukuman['nama_hukuman']; ?></td>
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
