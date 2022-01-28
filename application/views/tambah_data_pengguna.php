 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Tambah Data Pengguna
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <form action="<?php echo $base_url; ?>data_pengguna/simpan" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Nama User :</label>
              <div class="controls">
                <input type="text" class="form-control" name="nama_user" placeholder="nama_user" />
              </div>
              <!-- <?php foreach ($data_pengguna as $row) : ?>
              <option value="<?= $row['nama_user'] ?>"><?= $row['nama_user'] ?></option>
              <?php endforeach; ?> -->
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text" class="form-control" name="username" placeholder="username" />
              </div>
              
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="text" class="form-control" name="password" placeholder="password" />
              </div>

              <div class="control-group">
                <label class="control-label">Level :</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="level" value="admin" />
                      admin</label>
                    <label>
                      <input type="radio" name="level" value="user" />
                      user</label>
                  </div>
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
