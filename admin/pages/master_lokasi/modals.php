<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah Lokasi</h4>
      </div>
      <form class="container-fluid" action="pages/master_lokasi/add_lokasi.php" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_lokasi" />
            <label class="floating-label">ID Lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_lokasi" />
            <label class="floating-label">Nama Lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="alamat" />
            <label class="floating-label">Alamat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="telephone" />
            <label class="floating-label">No Telephone</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['id_lokasi']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus Lokasi</h4>
      </div>
      <?php
        $delete=mysqli_query($conn,"select * from lokasi where id_lokasi='".$row['id_lokasi']."'");
        $dRow=mysqli_fetch_array($delete);
      ?>
      <form class="container-fluid" action="pages/master_lokasi/delete_lokasi.php?id_lokasi=<?php echo $dRow['id_lokasi']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_lokasi" value="<?php echo $dRow['id_lokasi']; ?>" readonly />
            <label class="floating-label">ID lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_lokasi" value="<?php echo $dRow['nama_lokasi']; ?>" readonly />
            <label class="floating-label">Nama lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="alamat" value="<?php echo $dRow['alamat']; ?>"/>
            <label class="floating-label">Alamat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="telephone" value="<?php echo $dRow['telephone']; ?>" />
            <label class="floating-label">No Telephone</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['id_lokasi']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit Lokasi</h4>
      </div>
      <?php
        $edit=mysqli_query($conn,"select * from lokasi where id_lokasi='".$row['id_lokasi']."'");
        $eRow=mysqli_fetch_array($edit);
      ?>
      <form class="container-fluid" action="pages/master_lokasi/update_lokasi.php?id_lokasi=<?php echo $eRow['id_lokasi']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="id_lokasi" value="<?php echo $eRow['id_lokasi']; ?>" readonly />
            <label class="floating-label">ID lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama_lokasi" value="<?php echo $eRow['nama_lokasi']; ?>" />
            <label class="floating-label">Nama lokasi</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="alamat" value="<?php echo $eRow['alamat']; ?>"/>
            <label class="floating-label">Alamat</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="telephone" value="<?php echo $eRow['telephone']; ?>"/>
            <label class="floating-label">No Telephone</label>
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
