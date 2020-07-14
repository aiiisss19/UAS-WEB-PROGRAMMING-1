<?php
include '../config.php';
 ?>
<div class="page-header">
  <h1 class="page-title">Detail Pegawai</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="?hal=detail_pegawai">Detail Pegawai</a></li>
  </ol>
</div>

<div class="page-content container-fluid">
  <!-- Example Tabs In The Panel -->
  <div class="panel nav-tabs-horizontal" data-plugin="tabs">
    <div class="panel-heading">
      <h3 class="panel-title">Detail Pegawai</h3>
    </div>
    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#exampleTopHome"
          aria-controls="exampleTopHome" role="tab"><i class="icon md-account" aria-hidden="true"></i>Informasi Pegawai</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopComponents"
          aria-controls="exampleTopComponents" role="tab"><i class="icon md-file" aria-hidden="true"></i>Informasi Pekerjaan</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss"
          role="tab"><i class="icon fa-graduation-cap" aria-hidden="true"></i>Riwayat Pendidikan Terakhir</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#exampleTopJavascript"
          aria-controls="exampleTopJavascript" role="tab"><i class="icon md-file" aria-hidden="true"></i>Riwayat Pekerjaan Terakhir</a></li>
      <!-- <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false"
          aria-haspopup="true">Dropdown </a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item active" data-toggle="tab" href="#exampleTopHome" aria-controls="exampleTopHome"
            role="tab"><i class="icon md-home" aria-hidden="true"></i>Home</a>
          <a class="dropdown-item" data-toggle="tab" href="#exampleTopComponents" aria-controls="exampleTopComponents"
            role="tab"><i class="icon md-account" aria-hidden="true"></i>Components</a>
          <a class="dropdown-item" data-toggle="tab" href="#exampleTopCss" aria-controls="exampleTopCss"
            role="tab"><i class="icon md-label" aria-hidden="true"></i>CSS</a>
          <a class="dropdown-item" data-toggle="tab" href="#exampleTopJavascript" aria-controls="exampleTopJavascript"
            role="tab"><i class="icon md-cloud" aria-hidden="true"></i>JavaScript</a>
        </div>
      </li> -->
    </ul>
    <div class="panel-body">
      <div class="tab-content">
        <div class="tab-pane active" id="exampleTopHome" role="tabpanel">
          <div class="panel panel-primary">
            <div class="panel-body">
              <?php
                $query = "SELECT * FROM pegawai where deleted=0 and nip='".$_GET['nip']."' ORDER BY tanggal_masuk DESC";
                $sqlPegawai = mysqli_query($conn, $query);
                $rowPegawai = mysqli_fetch_array($sqlPegawai);
               ?>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nip" readonly disabled value="<?php echo $rowPegawai['nip']; ?>" />
                    <label class="floating-label">NIP</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama" readonly disabled value="<?php echo $rowPegawai['nama_pegawai']; ?>" />
                    <label class="floating-label">Nama Lengkap</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tempat_lahir" readonly disabled value="<?php echo $rowPegawai['tempat_lahir']; ?>" />
                    <label class="floating-label">Tempat Lahir</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="height:20px;">

                  </div>
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="date" class="form-control" name="tanggal_lahir" readonly disabled value="<?php echo $rowPegawai['tanggal_lahir']; ?>" />
                    <label class="floating-label">Tanggal Lahir</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="agama" readonly disabled>
                      <option>&nbsp;</option>
                      <option value="Islam" <?php if($rowPegawai['agama'] == 'Islam'){ echo 'selected'; } ?> >Islam</option>
                      <option value="Kristen" <?php if($rowPegawai['agama'] == 'Kristen'){ echo 'selected'; } ?> >Kristen</option>
                      <option value="Protestan" <?php if($rowPegawai['agama'] == 'Protestan'){ echo 'selected'; } ?> >Protestan</option>
                      <option value="Hindu" <?php if($rowPegawai['agama'] == 'Hindu'){ echo 'selected'; } ?> >Hindu</option>
                      <option value="Budha" <?php if($rowPegawai['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
                    </select>
                    <label class="floating-label">Agama</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jk" readonly disabled>
                      <option value="Laki-laki" <?php if($rowPegawai['jk'] == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>
                      <option value="Perempuan" <?php if($rowPegawai['jk'] == 'Prempuan'){ echo 'selected'; } ?>>Perempuan</option>
                    </select>
                    <label class="floating-label">Jenis Kelamin</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="email" class="form-control" name="email" readonly disabled value="<?php echo $rowPegawai['email']; ?>" />
                    <label class="floating-label">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="no_hp" readonly disabled value="<?php echo $rowPegawai['no_hp']; ?>" />
                    <label class="floating-label">No HP</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <textarea class="form-control" name="alamat" readonly disabled><?php echo $rowPegawai['alamat']; ?></textarea>
                    <label class="floating-label">Alamat</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="exampleTopComponents" role="tabpanel">
          <div class="panel panel-primary panel-bordered">
            <div class="panel-body">
              <?php
              $sqlPekerjaan = mysqli_query($conn, "SELECT * FROM sk_kerja WHERE nip='".$_GET['nip']."'");
              $rowPekerjaan = mysqli_fetch_array($sqlPekerjaan);
               ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group form-material" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="sk_kerja" readonly disabled value="<?php echo $rowPekerjaan['no_sk']; ?>" />
                    <label class="floating-label">NO SK Kerja</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jabatan" disabled readonly>
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
                      <option value="<?php echo $rowJabatan['id_jabatan']; ?>" <?php if($rowJabatan['id_jabatan'] == $rowPekerjaan['id_jabatan']){ echo 'selected'; } ?> ><?php echo $rowJabatan['nama_jabatan']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jabatan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="unit_kerja" disabled readonly>
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
                      <option value="<?php echo $rowUnitKerja['id_unit_kerja']; ?>" <?php if($rowUnitKerja['id_unit_kerja'] == $rowPekerjaan['id_unit_kerja']){ echo 'selected'; } ?>><?php echo $rowUnitKerja['nama_unit_kerja']; ?></option>
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
                    <select class="form-control" name="pangkat" disabled readonly>
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
                      <option value="<?php echo $rowPangkat['id_pangkat']; ?>" <?php if($rowPangkat['id_pangkat'] == $rowPekerjaan['id_pangkat']){ echo 'selected'; } ?> ><?php echo $rowPangkat['nama_pangkat']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Pangkat</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="lokasi" disabled readonly>
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
                      <option value="<?php echo $rowLokasi['id_lokasi']; ?>" <?php if($rowLokasi['id_lokasi'] == $rowPekerjaan['id_lokasi']){ echo 'selected'; } ?> ><?php echo $rowLokasi['nama_lokasi']; ?></option>
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
        </div>
        <div class="tab-pane" id="exampleTopCss" role="tabpanel">
          <div class="panel panel-primary panel-bordered">
            <div class="panel-body">
              <?php
                $sqlPendidikan = mysqli_query($conn, "SELECT * FROM pendidikan WHERE nip='".$_GET['nip']."'");
                $rowPendidikan = mysqli_fetch_array($sqlPendidikan);
               ?>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <select class="form-control" name="jenjang" disabled>
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
                      <option value="<?php echo $rowJenjang1['nama_jenjang']; ?>" <?php if($rowJenjang1['nama_jenjang'] == $rowPendidikan['jenjang']){ echo 'selected'; } ?> ><?php echo $rowJenjang1['nama_jenjang']; ?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <label class="floating-label">Jenjang</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="nama_sekolah" disabled readonly value="<?php echo $rowPendidikan['nama_pendidikan']; ?>" />
                    <label class="floating-label">Nama Sekolah</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <input type="text" class="form-control" name="tahun_sekolah" readonly value="<?php echo $rowPendidikan['tahun_pendidikan']; ?>" />
                    <label class="floating-label">Tahun Sekolah</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="exampleTopJavascript" role="tabpanel">
          <div class="panel panel-primary panel-bordered">
                <div class="panel-body">
                  <?php
                    $sqlRiwayatKerja = mysqli_query($conn, "SELECT * FROM pengalaman_kerja WHERE nip='".$_GET['nip']."'");
                    $rowRiwayatKerja = mysqli_fetch_array($sqlRiwayatKerja);
                   ?>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="nama_pekerjaan" readonly disabled value="<?php echo $rowRiwayatKerja['nama_kerja']; ?>" />
                        <label class="floating-label">Pekerjaan</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="nama_perusahaan" readonly disabled value="<?php echo $rowRiwayatKerja['nama_perusahaan']; ?>" />
                        <label class="floating-label">Nama Perusahaan</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="text" class="form-control" name="tahun_kerja" readonly disabled value="<?php echo $rowRiwayatKerja['tahun_kerja']; ?>" />
                        <label class="floating-label">Tahun Kerja</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Example Tabs In The Panel -->
</div>
