<!-- Modal -->
<div class="modal fade modal-3d-flip-horizontal modal-primary" id="addNew" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Tambah User</h4>
      </div>
      <form class="container-fluid" action="pages/user/add_user.php" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama" />
            <label class="floating-label">Nama Lengkap</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="username" />
            <label class="floating-label">Username</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control" name="password" />
            <label class="floating-label">Password</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <select class="form-control" name="level">
              <option>&nbsp;</option>
              <option value="admin">Admin</option>
              <option value="personalia">Personalia</option>
              <option value="direktur">Direktur</option>
            </select>
            <label class="floating-label">Level Akses</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-danger" id="delete<?php echo $row['id_user']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalDanger" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Hapus User</h4>
      </div>
      <?php
        $delete=mysqli_query($conn,"select * from user where id_user='".$row['id_user']."'");
        $dRow=mysqli_fetch_array($delete);
      ?>
      <form class="container-fluid" action="pages/user/delete_user.php?id_user=<?php echo $dRow['id_user']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
            <p class="form-control">Detail data yang akan dihapus</p>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama" value="<?php echo $dRow['nama']; ?>" readonly />
            <label class="floating-label">Nama Lengkap</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="username" value="<?php echo $dRow['username']; ?>" readonly />
            <label class="floating-label">Username</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <select class="form-control" name="level" disabled>
              <option>&nbsp;</option>
              <option value="admin" <?php if($dRow['level']=='admin'){ echo "selected";} ?> >Admin</option>
              <option value="personalia" <?php if($dRow['level']=='personalia'){ echo "selected";} ?> >Personalia</option>
              <option value="direktur" <?php if($dRow['level']=='direktur'){ echo "selected";} ?> >Direktur</option>
            </select>
            <label class="floating-label">Level Akses</label>
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
<div class="modal fade modal-3d-flip-horizontal modal-warning" id="edit<?php echo $row['id_user']; ?>" aria-hidden="true"
  aria-labelledby="exampleModalPrimary" role="dialog" tabindex="-1">
  <div class="modal-dialog  modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Edit User</h4>
      </div>
      <?php
        $edit=mysqli_query($conn,"select * from user where id_user='".$row['id_user']."'");
        $eRow=mysqli_fetch_array($edit);
      ?>
      <form class="container-fluid" action="pages/user/update_user.php?id_user=<?php echo $eRow['id_user']; ?>" method="post">
        <div class="modal-body" autocomplete="off">
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="nama" value="<?php echo $eRow['nama']; ?>" />
            <label class="floating-label">Nama Lengkap</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="username" value="<?php echo $eRow['username']; ?>" />
            <label class="floating-label">Username</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <select class="form-control" name="level">
              <option>&nbsp;</option>
              <option value="admin" <?php if($eRow['level']=='admin'){ echo "selected";} ?> >Admin</option>
              <option value="personalia" <?php if($eRow['level']=='personalia'){ echo "selected";} ?> >Personalia</option>
              <option value="direktur" <?php if($eRow['level']=='direktur'){ echo "selected";} ?> >Direktur</option>
            </select>
            <label class="floating-label">Level Akses</label>
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
