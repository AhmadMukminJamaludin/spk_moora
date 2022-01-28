
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Logo -->
    <a href="index2.html" class="logo" style="background-color: #4D4D4D">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="background-color: #4D4D4D"><b>Moora</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less garis3-->
    <nav class="navbar navbar-static-top" style="background-color: #808080">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="asset/dist/img/admin1_1.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if($page=="home"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?php if($page=="calon_perangkat_desa"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>calon_perangkat_desa">
            <i class="fa fa-dashboard"></i> <span>Data Calon Perangkat Desa</span>
          </a>
        </li>
        <li <?php if($page=="kriteria"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Kriteria">
            <i class="fa fa-dashboard"></i> <span>Data Kriteria</span>
          </a>
        </li>
         <li <?php if($page=="perhitungan"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Hitung">
            <i class="fa fa-dashboard"></i> <span>Perhitungan</span>
          </a>
        </li>
        <li <?php if($page=="laporan"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>Laporan">
            <i class="fa fa-dashboard"></i> <span>Laporan</span>
          </a>
        </li>
        <li <?php if($page=="data_pengguna"){ echo "class='active'"; } ?>>
          <a href="<?php echo $base_url; ?>data_pengguna">
            <i class="fa fa-dashboard"></i> <span>Data Pengguna</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $base_url; ?>Logout">
            <i class="fa fa-dashboard"></i> <span>Keluar</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>