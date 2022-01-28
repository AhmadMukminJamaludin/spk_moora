 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <?= $this->session->flashdata('message'); ?>
      <h1>
        Data Calon Perangkat Desa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
      </div>
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Calon Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>calon_perangkat_desa/tambah" class="btn btn-success">Tambah Data Calon Perangkat Desa</a>
              <br>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Tanggal lahir</th>
          <th>Jenis kelamin</th>
          <th>No hp</th>
          <th>Posisi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($calon_perangkat_desa as $row) {
                  
                  ?>
                <tr>
                  <td><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nama; ?></td>
         <td><?php echo $row->alamat; ?></td>
         <td><?php echo $row->tanggal_lahir; ?></td>
         <td><?php echo $row->jenis_kelamin; ?></td>
         <td><?php echo $row->no_hp; ?></td>
         <td><?php echo $row->posisi; ?></td>
         <td><a href=<?= base_url('calon_perangkat_desa/delete/'. $row->id_calon ) ?> class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>  
         <a href=<?= base_url('calon_perangkat_desa/edit/'. $row->id_calon ) ?> class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a></td>
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