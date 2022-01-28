 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0"> 
    <?php foreach ($max as $keym) : ?>
        <?php foreach ($penentu as $row) : ?>
          <?php if ($row['nilai'] < $keym['max(nilai)']) : ?>
            <div class="callout callout-danger ">
                <h4>Maaf, anda belum terpilih sebagai <?= $row['posisi']; ?></h4>
                <br>
                <strong>Dengan hasil nilai akhir : <?= $row['nilai']; ?></strong>
                <p>Silahkan konfirmasi kepada administrator untuk proses lebih lanjut.</p>
              </div>
          <?php else : ?>
            <div class="callout callout-success ">
              <h4>Selamat anda terpilih sebagai <?= $row['posisi']; ?>!</h4>
              <br>
              <strong>Dengan hasil nilai akhir : <?= $row['nilai']; ?></strong>
              <p>Silahkan konfirmasi kepada administrator untuk proses lebih lanjut.</p>
            </div>
          <?php endif ?>
        <?php endforeach ?>
        <?php endforeach ?>
    </section>

 <!-- Main content -->
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">DATA CALON</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                <?php foreach ($calon_perangkat_desa as $row) : ?>
                  <label for="exampleInputEmail1">Nama :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $row['nama_user'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['alamat'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal lahir :</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $row['tanggal_lahir'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis kelamin :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['jenis_kelamin'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No. Hp :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['no_hp'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Posisi yang ingin dipilih :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['posisi'] ?>" disabled>
                  <?php endforeach ?>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">NILAI KRITERIA</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                <?php foreach ($kriteria as $row) : ?>
                  <label for="exampleInputEmail1">Pendidikan Terakhir :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $row['c1'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Usia :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['c2'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat :</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $row['c3'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tes Wawancara :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['c4'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CAT(Computer Assisted Test) :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['c5'] ?>" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Point Pengabdian :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $row['c6'] ?>" disabled>
                  <?php endforeach ?>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">HASIL PERHITUNGAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="35%">Nama</th>
                  <th width="10%">Nilai</th>
                  <th width="25%">Keterangan</th>
                </tr>
                </thead>
                <?php 
                $no = 0;
                $query = $this->db->query("SELECT * from rangking inner join calon_perangkat_desa on rangking.user_id=calon_perangkat_desa.user_id join user on user.id_user=rangking.user_id where rangking.tahun='2022' order by rangking.nilai DESC")->result(); ?>
                <?php foreach ($query as $data) : ?>
                <tbody>
                  <tr>
                    <th><?php echo $no=$no+1 ?></th>
                    <td><?php echo $data->nama_user; ?></td>
                    <td><?php echo $data->nilai; ?></td>
                    <td><?php if($no == 1){ echo "Terpilih sebagai perangkat desa dengan posisi ".$data->posisi; } ?></td>
                  </tr>
                </tbody>
                <?php endforeach ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

<!-- ./wrapper -->