<!DOCTYPE html>
<html>
<head>
  <?php include "header.php"; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IBS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IBS</b> Branchless</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $userdata->usr_fullname;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?php echo $userdata->usr_fullname;?> - Web Developer
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> -->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
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
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $userdata->usr_fullname;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active dashboard"><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</a></li>
        <li class="treeview" id="">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Registrasi</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>master_nasabah"><i class="fa fa-circle-o"></i>Master Nasabah</a></li>
            <li><a href="<?php echo base_url(); ?>master_tabungan"><i class="fa fa-circle-o"></i>Master Tabungan</a></li>
            <li><a href="<?php echo base_url(); ?>master_kredit"><i class="fa fa-circle-o"></i>Master Kredit</a></li>
            <li><a href="<?php echo base_url(); ?>master_nasabah/list_data"><i class="fa fa-circle-o"></i>List Master Nasabah</a></li>
            <li><a href="<?php echo base_url(); ?>master_tabungan/list_data"><i class="fa fa-circle-o"></i>List Master Tabungan</a></li>
            <li><a href="<?php echo base_url(); ?>master_kredit/list_data"><i class="fa fa-circle-o"></i>List Master Kredit</a></li>
          </ul>
        </li>
        <li class="treeview browse_data_master">
          <a href="<?php echo base_url(); ?>browse_data_master"><i class="fa fa-book"></i> <span>Browse Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="tabungan"><a href="<?php echo base_url(); ?>browse_data_master/tabungan"><i class="fa fa-circle-o"></i> Tabungan</a></li>
            <li class="kredit"><a href="<?php echo base_url(); ?>browse_data_master/kredit"><i class="fa fa-circle-o"></i> Kredit</a></li>
          </ul>
        </li>
        <li class="treeview transaksi">
          <a href="<?php echo base_url(); ?>"><i class="fa fa-book"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="setoran"><a href="<?php echo base_url(); ?>browse_data_master/trans_tabungan/setoran"><i class="fa fa-circle-o"></i>Setoran Tunai</a></li>
            <li class="penarikan"><a href="<?php echo base_url(); ?>browse_data_master/trans_tabungan/penarikan"><i class="fa fa-circle-o"></i>Penarikan Tunai</a></li>
            <li class="angsuran_pinjaman"><a href="<?php echo base_url(); ?>"><i class="fa fa-circle-o"></i>Angsuran Pinjaman</a></li>
            <li class="transaksi_jurnal"><a href="<?php echo base_url(); ?>transaksi_jurnal"><i class="fa fa-circle-o"></i>Transaksi Jurnal</a></li>
            <li class="reversal"><a href="<?php echo base_url(); ?>"><i class="fa fa-circle-o"></i>Reversal</a></li>
            <li class="bagi_hasil"><a href="<?php echo base_url(); ?>bagi_hasil"><i class="fa fa-circle-o"></i>Bagi Hasil</a></li>
          </ul>
        </li>
        <li class="treeview laporan">
          <a href="<?php echo base_url(); ?>"><i class="fa fa-book"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="neraca"><a href="<?php echo base_url(); ?>neraca"><i class="fa fa-circle-o"></i>Neraca</a></li>
            <li class="laba_rugi"><a href="<?php echo base_url(); ?>laba_rugi"><i class="fa fa-circle-o"></i>Laba Rugi</a></li>
            <li class="angsuran_pinjaman"><a href="<?php echo base_url(); ?>mutasi_kas"><i class="fa fa-circle-o"></i>Mutasi Kas</a></li>
            <li class="transaksi_jurnal"><a href="<?php echo base_url(); ?>rekening_koran_tabungan"><i class="fa fa-circle-o"></i>Rekening Koran Tabungan</a></li>
            <li class="reversal"><a href="<?php echo base_url(); ?>riwayat_kredit"><i class="fa fa-circle-o"></i>Riwayat Kredit</a></li>
            <li class="bagi_hasil"><a href="<?php echo base_url(); ?>jurnal_transaksi"><i class="fa fa-circle-o"></i>Jurnal Transaksi</a></li>
            <li class="bagi_hasil"><a href="<?php echo base_url(); ?>rekap_transaksi"><i class="fa fa-circle-o"></i>Rekap Transaksi</a></li>
          </ul>
        </li>
        <li class="treeview upload_data"><a href="<?php echo base_url(); ?>upload"><i class="fa fa-book"></i> <span>Upload Data</span></a></li>
        <!-- <li class="treeview menu_browse_data_master"><a href="<?php echo base_url(); ?>log_out"><i class="fa fa-book"></i> <span>Keluar Aplikasi</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php include $link; ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">CS Pro Dev Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat historys
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
  var menu = <?php echo json_encode($menu);?> ;
  $(document).ready(function(){
    $(".sidebar-menu li").removeClass('active');
    $.each(menu, function(idx, val){
      console.log(val);
      $("."+val).addClass('active');
    });
  });
</script>

</body>
</html>
