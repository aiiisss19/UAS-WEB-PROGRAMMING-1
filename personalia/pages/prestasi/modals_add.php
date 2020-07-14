<?php
include '../config.php';
 ?>

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew<?php echo $row['nip']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah Prestasi</h4>
      </div>
      <form class="container-fluid" action="pages/prestasi/add_prestasi.php?nip=<?php echo $row['nip']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <?php
            $sqlInfoPegawai = mysqli_query($conn, "SELECT * FROM pegawai WHERE nip='".$row['nip']."'");
            $rowInfoPegawai = mysqli_fetch_array($sqlInfoPegawai);
          ?>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" disabled readonly value="<?php echo $rowInfoPegawai['nip']; ?>" />
            <label class="floating-label">NIP</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama" disabled readonly value="<?php echo $rowInfoPegawai['nama_pegawai']; ?>" />
            <label class="floating-label">Nama Pegawai</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="prestasi" />
            <label class="floating-label">Prestasi</label>
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
