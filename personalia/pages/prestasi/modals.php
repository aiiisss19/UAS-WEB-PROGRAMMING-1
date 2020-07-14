<?php
include '../config.php';
 ?>

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $rowPrestasi['id_prestasi']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Prestasi</h4>
      </div>
      <?php
        $sqlEditPegawai = "SELECT * FROM prestasi, pegawai WHERE prestasi.nip=pegawai.nip and id_prestasi='".$rowPrestasi['id_prestasi']."'";
        $infoPegawai = mysqli_query($conn, $sqlEditPegawai);
        $rowEdit = mysqli_fetch_array($infoPegawai);
       ?>
      <form class="container-fluid" action="pages/prestasi/update_prestasi.php?id_prestasi=<?php echo $rowEdit['id_prestasi']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" disabled readonly value="<?php echo $rowEdit['nip']; ?>" />
            <label class="floating-label">NIP</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama" disabled readonly value="<?php echo $rowEdit['nama_pegawai']; ?>" />
            <label class="floating-label">Nama Pegawai</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="prestasi"value="<?php echo $rowEdit['nama_prestasi']; ?>" />
            <label class="floating-label">Prestasi</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->


<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $rowPrestasi['id_prestasi']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus Prestasi</h4>
      </div>
      <?php
        $sqlDelPrestasi=mysqli_query($conn,"SELECT * FROM prestasi, pegawai WHERE prestasi.nip=pegawai.nip AND id_prestasi='".$rowPrestasi['id_prestasi']."'");
        $dRowPrestasi=mysqli_fetch_array($sqlDelPrestasi);
      ?>
      <form class="container-fluid" action="pages/prestasi/delete_prestasi.php?id_prestasi=<?php echo $dRowPrestasi['id_prestasi']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowPrestasi['nip']; ?>" readonly />
            <label class="floating-label">NIP</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowPrestasi['nama_pegawai']; ?>" readonly />
            <label class="floating-label">Nama Pegawai</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="prestasi" value="<?php echo $dRowPrestasi['nama_prestasi']; ?>" readonly />
            <label class="floating-label">Prestasi</label>
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
