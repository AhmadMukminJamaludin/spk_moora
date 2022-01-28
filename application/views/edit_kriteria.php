 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Ubah Alternatif Kriteria
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Calon Perangkat Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                  <?php 
                  $nomor = 0;
                  foreach ($kriteria as $data) {
                  
                  ?>
                <form action="<?php echo $base_url; ?>kriteria/proses_edit" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama Calon Perangkat Desa</label>
              <div class="controls">
              <input type="text" name="nama" class="form-control" value="<?php echo $data->nama_user; ?>" placeholder="masukkan nilai" disabled>
              </div>
            </div>
            <input type="hidden" name="id_kriteria" value="<?php echo $data->id_kriteria; ?>">
           <div class="control-group">
              <label class="control-label">Pendidikan Terakhir :</label>
              <div class="controls">
                <input type="text" name="c1" class="form-control" value="<?php echo $data->c1; ?>" placeholder="masukkan nilai">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Usia :</label>
              <div class="controls">
                <input type="text" name="c2" class="form-control" value="<?php echo $data->c2; ?>" placeholder="masukkan nilai">
        
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="text" name="c3" class="form-control" value="<?php echo $data->c3; ?>" placeholder="masukkan nilai">
        
              </div>
            </div>
           <div class="control-group">
              <label class="control-label" name="c4">Tes Wawancara :</label>
              <div class="controls">
                <input type="text" name="c4" class="form-control" value="<?php echo $data->c4; ?>" placeholder="masukkan nilai">
        
              </div>
            </div>
           <div class="control-group">
              <label class="control-label" name="c5">CAT(Computer Assisted Test :</label>
              <div class="controls">
                <input type="text" name="c5" class="form-control" value="<?php echo $data->c5; ?>" placeholder="masukkan nilai">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" name="c6">Point Pengabdian :</label>
              <div class="controls">
                <input type="text" name="c6" class="form-control" value="<?php echo $data->c6; ?>" placeholder="masukkan nilai">
              </div>
            </div>
            <label class="control-label" name="c6">Tahun :</label>
            <input type="text" name="tahun" class="form-control" value="<?php echo $data->tahun; ?>"
                placeholder="masukkan tahun">
            <div class="form-actions">
              <button type="submit" name="simpan" id="simpan" value="Simpan" class="btn btn-success">Save</button>
             <button type="reset" name="reset" id="reset" value="reset" class="btn btn-danger">reset</button>
            </div>
          </form>
                <?php
                }
                ?>
              
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
