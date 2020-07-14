<?php
  include_once("../config.php");
 ?>

<div class="page-header">
  <h1 class="page-title">Tabel Master Unit Kerja</h1>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
    <li class="breadcrumb-item"><a href="?hal=user">Data Master Unit Kerja</a></li>
  </ol>
</div>

<div class="page-content container-fluid">

  <!-- Panel Table Tools -->
  <div class="panel panel-primary">
    <header class="panel-heading">
      <div class="row">
        <div style="width:30px;">
        </div>
        <h5 class="btn btn-primary" data-target="#addNew" data-toggle="modal" ><i class="icon md-plus" aria-hidden="true"></i>Tambah Unit Kerja</h5>
      </div>
    </header>
    <div class="panel-body">
      <div style="height:10px;"></div>
      <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
        <thead>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Unit Kerja</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Unit Kerja</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $sql = 'SELECT * FROM unit_kerja WHERE deleted=0 ORDER BY id_unit_kerja DESC';

            $query = mysqli_query($conn, $sql);

            if (!$query) {
              die ('SQL Error: ' . mysqli_error($conn));
            }
            $no=1;
            while ($row = mysqli_fetch_assoc($query)) {
           ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['id_unit_kerja']; ?></td>
            <td><?php echo $row['nama_unit_kerja'] ?></td>
            <td class="text-nowrap">
              <button data-target="#edit<?php echo $row['id_unit_kerja']; ?>" type="button" class="btn btn-xs btn-icon btn-pill-left btn-warning" data-toggle="modal" title="Edit">
                <i class="icon md-wrench" aria-hidden="true"></i>
              </button>
              <button data-target="#delete<?php echo $row['id_unit_kerja']; ?>" type="button" class="btn btn-xs btn-icon btn-pill-right btn-danger" data-toggle="modal" data-original-title="Delete">
                <i class="icon md-close" aria-hidden="true"></i>
              </button>

              <?php require 'modals.php' ?>
            </td>
          </tr>
          <?php
            $no++;
            }
          ?>

          <?php require 'modals.php' ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Panel Table Tools -->

</div>
