 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      
     <div class="row">
      <form action="" method="get" class="form-horizontal">
          <div class="col-xs-4">
              <label class="control-label" name="tahun">Tahun</label>
              <div class="controls">
                <select name="tahun" class="form-control">
                  <?php for($i = date('Y'); $i >= (date('Y') - 5); $i--): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
                </select>
              </div>
          </div>
          </div>
          <br>
          <div class="row">
            <div class="col-xs-3">

                <button type="submit" value="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
     <br>
     <?php
     if (isset($_GET['tahun'])) {
     ?>
     <div class="row">
       <div class="box">
         <div class="box-body">
           <table class="table table-bordered data-table">
              <thead>
                <tr>
             <th width="5%">No</th>
              <th width="35%">Nama</th>
              <th width="10%">Nilai</th>
              <th width="25%">Keterangan</th>
        </tr>
              </thead>
              <tbody>
            <?php 
        $nomor = 0;
        $tahun = $_GET['tahun'];
        $query = $this->db->query("SELECT * from rangking inner join calon_perangkat_desa on rangking.user_id=calon_perangkat_desa.user_id join user on user.id_user=rangking.user_id where rangking.tahun='$tahun' order by rangking.nilai DESC")->result();
        
        foreach ($query as $data) {
          
              ?>
              <tr>
                <th><?php echo $nomor=$nomor+1; ?></th>
                <td><?php echo $data->nama_user; ?></td>
                <td><?php echo $data->nilai; ?></td>
                <td><?php if($nomor == 1){ echo "Terpilih sebagai perangkat desa dengan posisi ".$data->posisi; } ?></td>
              </tr>

            <?php

        }
      
             ?>
              </tbody>
            </table>
         </div>
       </div>
     </div>
     <div class="row">
       
          <center><a href="<?php echo $base_url; ?>laporan/cetak?thn=<?php echo $tahun; ?>" class="btn btn-info">Cetak Laporan</a></center>
        <?php } ?>
          
        
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