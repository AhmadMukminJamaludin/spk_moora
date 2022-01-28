 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Tambah Data Calon Perangkat Desa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Calon Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <form action="<?php echo $base_url; ?>calon_perangkat_desa/simpan" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <select name="nama" class="form-control">
                <?php foreach ($data_calon as $row) : ?>
                <option value="<?= $row['nama_user'] ?>"><?= $row['nama_user'] ?></option>
                <?php endforeach; ?>
                </select>
              </div>
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" class="form-control" name="alamat" placeholder="alamat" />
              </div>
              
              <label class="control-label">Tanggal lahir :</label>
              <div class="controls">
                <input type="text" class="form-control" name="tanggal_lahir" placeholder="tanggal lahir" />
              </div>

              <div class="control-group">
                <label class="control-label">Jenis kelamin :</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="jenis_kelamin" value="perempuan" />
                      perempuan</label>
                    <label>
                      <input type="radio" name="jenis_kelamin" value="laki-laki" />
                      laki-laki</label>
                  </div>
              </div> 

              <label class="control-label">Nomer HP :</label>
              <div class="controls">
                <input type="text" class="form-control" name="no_hp" placeholder="no hp" />
              </div>

              <label class="control-label">Posisi :</label>
              <div class="controls">
                <input type="text" class="form-control" name="posisi" placeholder="posisi" />
              </div>
            <br>
            <br>
            <div class="form-actions">
              <button type="submit"  name="save" value="Simpan" class="btn btn-success">Save</button>
              <input type="reset" name="reset" value="Reset" class="btn btn-danger"></center>
            </div>
          </form>
               
              
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
