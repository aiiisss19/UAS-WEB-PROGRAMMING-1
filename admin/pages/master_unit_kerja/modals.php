<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah Unit Kerja</h4>
      </div>
      <form class="container-fluid" action="pages/master_unit_kerja/add_unit_kerja.php" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_unit_kerja" />
            <label class="floating-label">ID Unit Kerja</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_unit_kerja" />
            <label class="floating-label">Nama Unit Kerja</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['id_unit_kerja']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus Unit Kerja</h4>
      </div>
      <?php
        $delete=mysqli_query($conn,"select * from unit_kerja where id_unit_kerja='".$row['id_unit_kerja']."'");
        $dRow=mysqli_fetch_array($delete);
      ?>
      <form class="container-fluid" action="pages/master_unit_kerja/delete_unit_kerja.php?id_unit_kerja=<?php echo $dRow['id_unit_kerja']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_unit_kerja" value="<?php echo $dRow['id_unit_kerja']; ?>" readonly />
            <label class="floating-label">ID Unit Kerja</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_unit_kerja" value="<?php echo $dRow['nama_unit_kerja']; ?>" readonly />
            <label class="floating-label">Nama Unit Kerja</label>
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

<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['id_unit_kerja']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Unit Kerja</h4>
      </div>
      <?php
        $edit=mysqli_query($conn,"select * from unit_kerja where id_unit_kerja='".$row['id_unit_kerja']."'");
        $eRow=mysqli_fetch_array($edit);
      ?>
      <form class="container-fluid" action="pages/master_unit_kerja/update_unit_kerja.php?id_unit_kerja=<?php echo $eRow['id_unit_kerja']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_unit_kerja" value="<?php echo $eRow['id_unit_kerja']; ?>" readonly />
            <label class="floating-label">ID Unit Kerja</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_unit_kerja" value="<?php echo $eRow['nama_unit_kerja']; ?>" />
            <label class="floating-label">Nama Unit Kerja</label>
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
