<?php
include '../config.php';
 ?>

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $rowHukuman['id_hukuman']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalWarning" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Hukuman</h4>
      </div>
      <?php
        $sqlEditPegawai = "SELECT * FROM hukuman, pegawai WHERE hukuman.nip=pegawai.nip and id_hukuman='".$rowHukuman['id_hukuman']."'";
        $infoPegawai = mysqli_query($conn, $sqlEditPegawai);
        $rowEdit = mysqli_fetch_array($infoPegawai);
       ?>
      <form class="container-fluid" action="pages/hukuman/update_hukuman.php?id_hukuman=<?php echo $rowEdit['id_hukuman']; ?>" method="post">
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
            <input type="text" class="form-control" name="hukuman"value="<?php echo $rowEdit['nama_hukuman']; ?>" />
            <label class="floating-label">Hukuman</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $rowHukuman['id_hukuman']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus Hukuman</h4>
      </div>
      <?php
        $sqlDelHukuman=mysqli_query($conn,"SELECT * FROM hukuman, pegawai WHERE hukuman.nip=pegawai.nip AND id_hukuman='".$rowHukuman['id_hukuman']."'");
        $dRowHukuman=mysqli_fetch_array($sqlDelHukuman);
      ?>
      <form class="container-fluid" action="pages/hukuman/delete_hukuman.php?id_hukuman=<?php echo $dRowHukuman['id_hukuman']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowHukuman['nip']; ?>" readonly />
            <label class="floating-label">NIP</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nip" value="<?php echo $dRowHukuman['nama_pegawai']; ?>" readonly />
            <label class="floating-label">Nama Pegawai</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="hukuman" value="<?php echo $dRowHukuman['nama_hukuman']; ?>" readonly />
            <label class="floating-label">Hukuman</label>
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
