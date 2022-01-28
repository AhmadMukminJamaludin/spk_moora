 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <?= $this->session->flashdata('message'); ?>
      <h1>
        Data Pengguna
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      </div>
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>data_pengguna/tambah" class="btn btn-success">Tambah Data Pengguna</a>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
          <th>Nama User</th>
          <th>Username</th>
          <th>Password</th>
          <th>Level</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($data_pengguna as $row) {
                  
                  ?>
                <tr>
                  <td><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nama_user; ?></td>
         <td><?php echo $row->username; ?></td>
         <td><?php echo $row->password; ?></td>
         <td><?php echo $row->level; ?></td>
         <td><a href=<?= base_url('data_pengguna/delete/'. $row->id_user ) ?> class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>  
         <a href=<?= base_url('data_pengguna/edit/'. $row->id_user ) ?> class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a></td>
                </tr>
                <?php
                }
                ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
     </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->