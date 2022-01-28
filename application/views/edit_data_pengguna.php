 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #C0C0C0">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #C0C0C0">
      <h1>
        Ubah Data Pengguna
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?= base_url('data_pengguna/submitedit/'. $row['id_user'] ) ?>" method="post" class="form-horizontal">
              <input type="hidden" name="id" value="<?= $row['id_user'] ?>" />
            <div class="control-group">
              <label class="control-label">Nama User:</label>
              <div class="controls">
                <input type="text" class="form-control" name="nama_user" value="<?= $row['nama_user'] ?>" />
              </div>
           
              <label class="control-label">Username :</label>
              <div class="controls">
                 <textarea class="form-control" name="username" ><?= $row['username'] ?></textarea>
              </div>
              
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="text" class="form-control" name="password" value="<?= $row['password'] ?>" />
              </div>

              <div class="control-group">
                <label class="control-label">Level :</label>
                  <div class="controls">
                    <label>
                      <input type="radio" name="level" value="admin" <?php if($row['level'] == "admin"){ print 'checked'; }?> />
                      admin</label>
                    <label>
                      <input type="radio" name="level" value="user" <?php if($row['level'] == "user"){ print 'checked'; }?> />
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

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->