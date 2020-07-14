<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah Jabatan</h4>
      </div>
      <form class="container-fluid" action="pages/master_jabatan/add_jabatan.php" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_jabatan" />
            <label class="floating-label">ID Jabatan</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_jabatan" />
            <label class="floating-label">nama_jabatan</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['id_jabatan']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus jabatan</h4>
      </div>
      <?php
        $delete=mysqli_query($conn,"select * from jabatan where id_jabatan='".$row['id_jabatan']."'");
        $dRow=mysqli_fetch_array($delete);
      ?>
      <form class="container-fluid" action="pages/master_jabatan/delete_jabatan.php?id_jabatan=<?php echo $dRow['id_jabatan']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_jabatan" value="<?php echo $dRow['id_jabatan']; ?>" readonly />
            <label class="floating-label">ID Jabatan</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $dRow['nama_jabatan']; ?>" readonly />
            <label class="floating-label">Nama Jabatan</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['id_jabatan']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit jabatan</h4>
      </div>
      <?php
        $edit=mysqli_query($conn,"select * from jabatan where id_jabatan='".$row['id_jabatan']."'");
        $eRow=mysqli_fetch_array($edit);
      ?>
      <form class="container-fluid" action="pages/master_jabatan/update_jabatan.php?id_jabatan=<?php echo $eRow['id_jabatan']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_jabatan" value="<?php echo $eRow['id_jabatan']; ?>" readonly />
            <label class="floating-label">ID Jabatan</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $eRow['nama_jabatan']; ?>" />
            <label class="floating-label">Nama Jabatan</label>
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
