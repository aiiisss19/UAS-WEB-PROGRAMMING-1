<?php
  include_once("../config.php");
 ?>

<div class="page-header">
  <h3 class="title">Silahkan Pilih Pegawai</h3>
</div>

<div class="page-content container-fluid">
  <!-- Panel Table Tools -->
  <div class="panel panel-primary">
    <header class="panel-heading">
      <div class="row">
        <div style="width:30px;">
        </div>
        <h5 class="panel-title"><i class="icon md-accounts-alt" aria-hidden="true"></i>Data Pegawai</h5>
      </div>
    </header>
    <div class="panel-body">
      <div style="height:10px;"></div>
      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>TTL</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>TTL</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          // Tampilkan data dari Database
          $sql = "SELECT * FROM pegawai ORDER BY tanggal_masuk";
          $query = mysqli_query($conn, $sql);
          if (!$query) {
            die ('SQL Error: ' . mysqli_error($conn));
          }
          $no=1;
          while ($row = mysqli_fetch_array($query)) {
          // $Kode = $row['nip'];
          ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><b><a href="?hal=detail_pegawai&nip=<?php echo $row['nip']; ?>" title="lihat detail pegawai"><?php echo $row['nip'] ?></a></b></td>
          <td><?php echo $row['nama_pegawai']; ?></td>
          <td><?php echo $row['jk']; ?></td>
          <td><?php echo $row['tempat_lahir'].", ".$row['tanggal_lahir']; ?></td>
          <td><?php echo $row['no_hp']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['tanggal_masuk']; ?></td>
          <td class="text-nowrap">
            <button data-target="#addNew<?php echo $row['nip']; ?>" type="button" class="btn btn-xs btn-icon btn-round btn-danger" data-toggle="modal" title="Tambah">
              <i class="icon md-thumb-down" aria-hidden="true"></i> Pilih
            </button>
            <?php require 'modals_add.php' ?>
          </td>
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
