<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah Pangkat</h4>
      </div>
      <form class="container-fluid" action="pages/master_pangkat/add_pangkat.php" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_pangkat" />
            <label class="floating-label">ID Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_pangkat" />
            <label class="floating-label">Nama Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="gaji" />
            <label class="floating-label">Gaji</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['id_pangkat']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus pangkat</h4>
      </div>
      <?php
        $delete=mysqli_query($conn,"select * from pangkat where id_pangkat='".$row['id_pangkat']."'");
        $dRow=mysqli_fetch_array($delete);
      ?>
      <form class="container-fluid" action="pages/master_pangkat/delete_pangkat.php?id_pangkat=<?php echo $dRow['id_pangkat']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_pangkat" value="<?php echo $dRow['id_pangkat']; ?>" readonly />
            <label class="floating-label">ID Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_pangkat" value="<?php echo $dRow['nama_pangkat']; ?>" readonly />
            <label class="floating-label">Nama Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="gaji" value="<?php echo $dRow['gaji']; ?>"/>
            <label class="floating-label">Gaji</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['id_pangkat']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Pangkat</h4>
      </div>
      <?php
        $edit=mysqli_query($conn,"select * from pangkat where id_pangkat='".$row['id_pangkat']."'");
        $eRow=mysqli_fetch_array($edit);
      ?>
      <form class="container-fluid" action="pages/master_pangkat/update_pangkat.php?id_pangkat=<?php echo $eRow['id_pangkat']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_pangkat" value="<?php echo $eRow['id_pangkat']; ?>" readonly />
            <label class="floating-label">ID Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_pangkat" value="<?php echo $eRow['nama_pangkat']; ?>" />
            <label class="floating-label">Nama Pangkat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="gaji" value="<?php echo $eRow['gaji']; ?>"/>
            <label class="floating-label">Gaji</label>
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
