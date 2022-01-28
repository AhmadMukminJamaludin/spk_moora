
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
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('asset') ?>/dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>User</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('HomeUser') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
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