  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Data Kriteria
      </h1>
    </section>

 <!-- Main content -->
    <section class="content">
      <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bobot Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
          <th class="text-center" width="40px">No</th>
          <th class="text-center">Pendidikan Terakhir</th>
          <th class="text-center">Usia</th>
          <th class="text-center">Alamat</th>
          <th class="text-center">Tes Wawancara</th>
          <th class="text-center">CAT(Computer Assisted Test)</th>
          <th class="text-center">Point Pengabdian</th>
          <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($bobot as $row) {
                  
                  ?>
                <tr>
                  <td align="center"><?php echo $nomor=$nomor+1; ?></td>
         <td align="center"><?php echo $row->w1; ?></td>
         <td align="center"><?php echo $row->w2; ?></td>
         <td align="center"><?php echo $row->w3; ?></td>
         <td align="center"><?php echo $row->w4; ?></td>
         <td align="center"><?php echo $row->w5; ?></td>
         <td align="center"><?php echo $row->w6; ?></td>
         <td align="center"><?php echo "<a href=".$base_url."Bobot/ class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?></td>
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
      
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Alternatif Kriteria</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo $base_url; ?>Kriteria/tambah" class="btn btn-success">Tambah Alternatif Kriteria</a>
         <br>
         <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
          <th class="text-center" width="40px">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">Pendidikan Terakhir</th>
          <th class="text-center">Usia</th>
          <th class="text-center">Alamat</th>
          <th class="text-center">Tes Wawancara</th>
          <th class="text-center">CAT(Computer Assisted Test)</th>
          <th class="text-center">Point Pengabdian</th>
          <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $nomor = 0;
                  foreach ($kriteria as $row) {
                  
                  ?>
                <tr>
                  <td align="center"><?php echo $nomor=$nomor+1; ?></td>
         <td><?php echo $row->nama; ?></td>
         <td align="center"><?php echo $row->c1; ?></td>
         <td align="center"><?php echo $row->c2; ?></td>
         <td align="center"><?php echo $row->c3; ?></td>
        <td align="center"><?php echo $row->c4; ?></td>
        <td align="center"><?php echo $row->c5; ?></td>
        <td align="center"><?php echo $row->c6; ?></td>
         <td align="center"><?php echo "<a href=".$base_url."Kriteria/delete?id=$row->id_kriteria class='btn btn-sm btn-danger'><i class='fa fa-trash'></i></a>" ?>  <?php echo "<a href=".$base_url."Kriteria/edit?id=$row->id_kriteria class='btn btn-sm btn-info'><i class='fa fa-edit'></i></a>" ?></td>
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