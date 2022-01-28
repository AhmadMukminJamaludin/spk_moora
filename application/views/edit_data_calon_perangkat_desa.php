 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Ubah Calon perangkat desa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Calon perangkat desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php foreach ($row as $key) : ?>
                <form action="<?= base_url('calon_perangkat_desa/submitedit/'. $key['id_calon'] ) ?>" method="post" class="form-horizontal">
              <input type="hidden" name="id" value="<?= $key['id_calon'] ?>" />
            <div class="control-group">
              <label class="control-label">Nama :</label>
              <div class="controls">
                <input type="text" class="form-control" name="nama" value="<?= $key['nama_user'] ?>" />
              </div>
           
              <label class="control-label">Alamat :</label>
              <div class="controls">
                 <textarea class="form-control" name="alamat" ><?= $key['alamat'] ?></textarea>
              </div>
              
              <label class="control-label">Tanggal lahir :</label>
              <div class="controls">
                <input type="text" class="form-control" name="tanggal_lahir" value="<?= $key['tanggal_lahir'] ?>" />
              </div>

              <div class="control-group">
                <label class="control-label">Jenis kelamin</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="jenis_kelamin" value="perempuan" <?php if($key['jenis_kelamin'] == "perempuan"){ print 'checked'; }?> />
                      perempuan</label>
                    <label>
                      <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($key['jenis_kelamin'] == "laki-laki"){ print 'checked'; }?> />
                      laki-laki</label>
                  </div>
              </div> 

              <label class="control-label">Nomer HP :</label>
              <div class="controls">
                <input type="text" class="form-control" name="no_hp" value="<?= $key['no_hp'] ?>" />
              </div>

              <label class="control-label">Posisi :</label>
              <div class="controls">
                <input type="text" class="form-control" name="posisi" value="<?= $key['posisi'] ?>" />
              </div>
              <?php endforeach ?>
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

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->