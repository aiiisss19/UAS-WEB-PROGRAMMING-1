<?php
  include_once("../config.php");
 ?>

<div class="page-header">
  <h1 class="page-title">Tabel SK Kerja</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="?hal=sk_kerja">Data SK Kerja</a></li>
  </ol>
</div>

<div class="page-content container-fluid">
  <!-- Panel Table Tools -->
  <div class="panel panel-primary">
    <header class="panel-heading">
      <div class="row">
        <div style="width:30px;">
        </div>
        <h5 class="panel-title"><i class="icon md-file" aria-hidden="true"></i>Daftar SK Kerja</h5>
      </div>
    </header>
    <div class="panel-body">
      <div style="height:10px;"></div>
      <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
        <thead>
          <tr>
            <th>NO</th>
            <th>No. SK</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Tgl. SK</th>
            <th>Lokasi</th>
            <th>Unit Kerja</th>
            <th>Jabatan</th>
            <th>Gaji (Rp)</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>NO</th>
            <th>No. SK</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Tgl. SK</th>
            <th>Lokasi</th>
            <th>Unit Kerja</th>
            <th>Jabatan</th>
            <th>Gaji (Rp)</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          // Tampilkan data dari Database
          $sql =
          "SELECT * FROM sk_kerja, pegawai, jabatan, lokasi, pangkat, unit_kerja
          WHERE pegawai.nip=sk_kerja.nip AND jabatan.id_jabatan=sk_kerja.id_jabatan
          AND lokasi.id_lokasi=sk_kerja.id_lokasi AND pangkat.id_pangkat=sk_kerja.id_pangkat
          AND unit_kerja.id_unit_kerja=sk_kerja.id_unit_kerja and sk_kerja.deleted=0";
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
            <td><?php echo $row['no_sk']; ?></td>
            <td><b><a href="?hal=detail_pegawai&nip=<?php echo $row['nip']; ?>" title="lihat detail pegawai"><?php echo $row['nip'] ?></a></b></td>
            <td><?php echo $row['nama_pegawai']; ?></td>
            <td><?php echo $row['tanggal_sk']; ?></td>
            <td><?php echo $row['nama_lokasi']; ?></td>
            <td><?php echo $row['nama_unit_kerja']; ?></td>
            <td><?php echo $row['nama_jabatan']; ?></td>
            <td>Rp. <?php echo $row['gaji']; ?></td>
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
