<?php
include '../config.php';
 ?>

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah User</h4>
      </div>
      <form class="container-fluid" role="form" action="pages/pegawai/add_pegawai.php" method="post">

        <div class="modal-body" autocomplete="off">
          <div class="panel panel-primary panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Informasi Pegawai</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nip" />
                    <label class="floating-label">NIP</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama" />
                    <label class="floating-label">Nama Lengkap</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tempat_lahir" />
                    <label class="floating-label">Tempat Lahir</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="height:20px;">

                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="date" class="form-control" name="tanggal_lahir" />
                    <label class="floating-label">Tanggal Lahir</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="agama">
                      <option>&nbsp;</option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Protestan">Protestan</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                    </select>
                    <label class="floating-label">Agama</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jk">
                      <option>&nbsp;</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <label class="floating-label">Jenis Kelamin</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control" name="email" />
                    <label class="floating-label">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="no_hp" />
                    <label class="floating-label">No HP</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <textarea class="form-control" name="alamat"></textarea>
                    <label class="floating-label">Alamat</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-primary panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Informasi Pekerjaan</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="sk_kerja" />
                    <label class="floating-label">NO SK Kerja</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jabatan">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlJabatan= "SELECT * FROM jabatan WHERE deleted=0 ORDER BY id_jabatan DESC";
                      $queryJabatan = mysqli_query($conn, $sqlJabatan);
                      if (!$queryJabatan) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowJabatan = mysqli_fetch_array($queryJabatan)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowJabatan['id_jabatan']; ?>"><?php echo $rowJabatan['nama_jabatan']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jabatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="unit_kerja">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlUnitKerja= "SELECT * FROM unit_kerja WHERE deleted=0 ORDER BY id_unit_kerja DESC";
                      $queryUnitKerja = mysqli_query($conn, $sqlUnitKerja);
                      if (!$queryUnitKerja) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowUnitKerja = mysqli_fetch_array($queryUnitKerja)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowUnitKerja['id_unit_kerja']; ?>"><?php echo $rowUnitKerja['nama_unit_kerja']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Unit Kerja</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="pangkat">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlPangkat= "SELECT * FROM pangkat WHERE deleted=0 ORDER BY id_pangkat DESC";
                      $queryPangkat = mysqli_query($conn, $sqlPangkat);
                      if (!$queryPangkat) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowPangkat = mysqli_fetch_array($queryPangkat)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowPangkat['id_pangkat']; ?>"><?php echo $rowPangkat['nama_pangkat']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Pangkat</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="lokasi">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlLokasi= "SELECT * FROM lokasi WHERE deleted=0 ORDER BY id_lokasi DESC";
                      $queryLokasi = mysqli_query($conn, $sqlLokasi);
                      if (!$queryLokasi) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowLokasi = mysqli_fetch_array($queryLokasi)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowLokasi['id_lokasi']; ?>"><?php echo $rowLokasi['nama_lokasi']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Lokasi</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-primary panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Riwayat Pendidikan Terakhir</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jenjang">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlJenjang1 = "SELECT * FROM jenjang";
                      $queryJenjang1 = mysqli_query($conn, $sqlJenjang1);
                      if (!$queryJenjang1) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowJenjang1 = mysqli_fetch_array($queryJenjang1)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowJenjang1['nama_jenjang']; ?>"><?php echo $rowJenjang1['nama_jenjang']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jenjang</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_sekolah" />
                    <label class="floating-label">Nama Sekolah</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tahun_sekolah" />
                    <label class="floating-label">Tahun Sekolah</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-primary panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Riwayat Pekerjaan Terakhir</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_pekerjaan" />
                    <label class="floating-label">Pekerjaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_perusahaan" />
                    <label class="floating-label">Nama Perusahaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tahun_kerja" />
                    <label class="floating-label">Tahun Kerja</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['nip']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah User</h4>
      </div>
      <?php
        $sqlEditPegawai=mysqli_query($conn,"select * from pegawai where nip='".$row['nip']."'");
        $eRowPegawai=mysqli_fetch_array($sqlEditPegawai);
      ?>
      <form class="container-fluid" role="form" action="pages/pegawai/update_pegawai.php?nip=<?php echo $row['nip']; ?>" method="post">

        <div class="modal-body" autocomplete="off">
          <div class="panel panel-warning panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Informasi Pegawai</h3>
            </div>
            <div class="panel-body">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nip" readonly value="<?php echo $eRowPegawai['nip'] ?>" />
                    <label class="floating-label">NIP</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama" value="<?php echo $eRowPegawai['nama_pegawai'] ?>" />
                    <label class="floating-label">Nama Lengkap</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $eRowPegawai['tempat_lahir'] ?>" />
                    <label class="floating-label">Tempat Lahir</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="height:20px;">

                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $eRowPegawai['tanggal_lahir'] ?>" />
                    <label class="floating-label">Tanggal Lahir</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="agama">
                      <option>&nbsp;</option>
                      <option value="Islam" <?php if($eRowPegawai['agama'] == 'Islam'){ echo 'selected'; } ?> >Islam</option>
                      <option value="Kristen" <?php if($eRowPegawai['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
                      <option value="Protestan" <?php if($eRowPegawai['agama'] == 'Protestan'){ echo 'selected'; } ?>>Protestan</option>
                      <option value="Budha" <?php if($eRowPegawai['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
                      <option value="Hindu" <?php if($eRowPegawai['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
                    </select>
                    <label class="floating-label">Agama</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jk">
                      <option>&nbsp;</option>
                      <option value="Laki-laki" <?php if($eRowPegawai['jk'] == 'Laki-laki'){ echo 'selected'; } ?> >Laki-laki</option>
                      <option value="Perempuan" <?php if($eRowPegawai['jk'] == 'Perempuan'){ echo 'selected'; } ?> >Perempuan</option>
                    </select>
                    <label class="floating-label">Jenis Kelamin</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control" name="email" value="<?php echo $eRowPegawai['email'] ?>" />
                    <label class="floating-label">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="no_hp" value="<?php echo $eRowPegawai['no_hp'] ?>" />
                    <label class="floating-label">No HP</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <textarea class="form-control" name="alamat"><?php echo $eRowPegawai['alamat'] ?></textarea>
                    <label class="floating-label">Alamat</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-warning panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Informasi Pekerjaan</h3>
            </div>
            <div class="panel-body">
              <?php
                $sqlEditPekerjaan=mysqli_query($conn,"select * from sk_kerja where nip='".$row['nip']."'");
                $eRowPekerjaan=mysqli_fetch_array($sqlEditPekerjaan);
              ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="sk_kerja" value="<?php echo $eRowPekerjaan['no_sk']; ?>" />
                    <label class="floating-label">NO SK Kerja</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jabatan">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlJabatan= "SELECT * FROM jabatan";
                      $queryJabatan = mysqli_query($conn, $sqlJabatan);
                      if (!$queryJabatan) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowJabatan = mysqli_fetch_array($queryJabatan)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowJabatan['id_jabatan']; ?>" <?php if($rowJabatan['id_jabatan'] == $eRowPekerjaan['id_jabatan']){ echo 'selected'; } ?> ><?php echo $rowJabatan['nama_jabatan']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jabatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="unit_kerja">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlUnitKerja= "SELECT * FROM unit_kerja";
                      $queryUnitKerja = mysqli_query($conn, $sqlUnitKerja);
                      if (!$queryUnitKerja) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowUnitKerja = mysqli_fetch_array($queryUnitKerja)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowUnitKerja['id_unit_kerja']; ?>" <?php if($rowUnitKerja['id_unit_kerja'] == $eRowPekerjaan['id_unit_kerja']){ echo 'selected'; } ?> ><?php echo $rowUnitKerja['nama_unit_kerja']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Unit Kerja</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="pangkat">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlPangkat= "SELECT * FROM pangkat";
                      $queryPangkat = mysqli_query($conn, $sqlPangkat);
                      if (!$queryPangkat) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowPangkat = mysqli_fetch_array($queryPangkat)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowPangkat['id_pangkat']; ?>"  <?php if($rowPangkat['id_pangkat'] == $eRowPekerjaan['id_pangkat']){ echo 'selected'; } ?> ><?php echo $rowPangkat['nama_pangkat']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Pangkat</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="lokasi">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlLokasi= "SELECT * FROM lokasi";
                      $queryLokasi = mysqli_query($conn, $sqlLokasi);
                      if (!$queryLokasi) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowLokasi = mysqli_fetch_array($queryLokasi)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowLokasi['id_lokasi']; ?>" <?php if($rowLokasi['id_lokasi'] == $eRowPekerjaan['id_lokasi']){ echo 'selected'; } ?> ><?php echo $rowLokasi['nama_lokasi']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Lokasi</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-warning panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Riwayat Pendidikan Terakhir</h3>
            </div>
            <div class="panel-body">
              <?php
                $sqlEditPendidikan=mysqli_query($conn,"select * from pendidikan where nip='".$row['nip']."'");
                $eRowPendidikan=mysqli_fetch_array($sqlEditPendidikan);
              ?>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jenjang">
                      <option>&nbsp;</option>
                      <?php
                      // Tampilkan data dari Database
                      $sqlJenjang1 = "SELECT * FROM jenjang";
                      $queryJenjang1 = mysqli_query($conn, $sqlJenjang1);
                      if (!$queryJenjang1) {
                        die ('SQL Error: ' . mysqli_error($conn));
                      }
                      while ($rowJenjang1 = mysqli_fetch_array($queryJenjang1)) {
                      // $Kode = $row['nip'];
                      ?>
                      <option value="<?php echo $rowJenjang1['nama_jenjang']; ?>" <?php if($rowJenjang1['nama_jenjang'] == $eRowPendidikan['jenjang']){ echo 'selected'; } ?> ><?php echo $rowJenjang1['nama_jenjang']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jenjang</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $eRowPendidikan['nama_pendidikan']; ?>" />
                    <label class="floating-label">Nama Sekolah</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tahun_sekolah" value="<?php echo $eRowPendidikan['tahun_pendidikan'] ?>" />
                    <label class="floating-label">Tahun Sekolah</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="panel panel-warning panel-bordered">
            <div class="panel-heading">
              <h3 class="panel-title">Riwayat Pekerjaan Terakhir</h3>
            </div>
            <div class="panel-body">
              <?php
                $sqlEditRiwayatKerja=mysqli_query($conn,"select * from pengalaman_kerja where nip='".$row['nip']."'");
                $eRowRiwayatKerja=mysqli_fetch_array($sqlEditRiwayatKerja);
              ?>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_pekerjaan" value="<?php echo $eRowRiwayatKerja['nama_kerja'] ?>" />
                    <label class="floating-label">Pekerjaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $eRowRiwayatKerja['nama_perusahaan'] ?>" />
                    <label class="floating-label">Nama Perusahaan</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tahun_kerja"  value="<?php echo $eRowRiwayatKerja['tahun_kerja'] ?>" />
                    <label class="floating-label">Tahun Kerja</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['nip']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus Pegawai</h4>
      </div>
      <?php
        $sqlDelPegawai=mysqli_query($conn,"select * from pegawai where nip='".$row['nip']."'");
        $dRowPegawai=mysqli_fetch_array($sqlDelPegawai);
      ?>
      <form class="container-fluid" action="pages/pegawai/delete_pegawai.php?nip=<?php echo $dRowPegawai['nip']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowPegawai['nip']; ?>" readonly />
            <label class="floating-label">NIP</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowPegawai['nama_pegawai']; ?>" readonly />
            <label class="floating-label">Nama Pegawai</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->
