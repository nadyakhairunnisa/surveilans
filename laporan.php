<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SURVEILANS PPI | RSUI Harapan Anda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-green-light.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">
    <!-- Main Header -->
    <header class="main-header" style="background-color: white;">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>PPI</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SURVEILANS</b></span>
      </a>
      <!-- Header Navbar -->

      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <img role="navigation" src="images/Untitled.png" style="background-repeat: no-repeat;">

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Notifications: style can be found in dropdown.less -->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/nurse.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Perawat Santi</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="images/nurse.png" class="img-circle" alt="User Image">
                  <p>
                    Perawat Santi
                    <small>Staff PPI</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>            
          </ul>
        </div>
      </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" >

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree" >
          <!-- <li class="header">HEADER</li> -->
          <!-- Optionally, you can add icons to the links -->
          <li><a href="index.php"><i class="glyphicon glyphicon-stats"></i><span>DASHBOARD</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-plus-circle"></i> <span>Tambah Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="create-pasien-data.php"><i class="fa fa-plus"></i>Pasien</a></li>
              <li><a href="create-terpajan.php"><i class="fa fa-plus"></i>Perawat</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="data-pasien.php"><i class="fa fa-circle-o"></i>Pasien</a></li>
              <li><a href="data-terpajan.php"><i class="fa fa-circle-o"></i>Terpajan</a></li>
              <li><a href="data-dokter.php"><i class="fa fa-circle-o"></i>Dokter</a></li>
              <li><a href="data-ruangan.php"><i class="fa fa-circle-o"></i>Ruangan</a></li>
            </ul>
          </li>
          <li class="active"><a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span>Laporan</span></a></li>
          <li><a href="login.html"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="dashboard">
        <div class="col-sm-12 coba">
          <div class="row">
            <section class="content-header">
              <h1>
                <div class="col-md-6">
                  Laporan Pemasangan Alat Invasif Tahun
                </div>
                <small>
                  <div class="col-sm-1">
                    <div class="form-group">
                      <select name="tahun" id="ruangan" class="form-control" data-placeholder="Pilih Tahun" style="width: 140%;margin-left:-90px;">
                        <?php
                        $mulai= date('Y') - 4;
                        for($i = $mulai;$i<$mulai+5;$i++){
                          $sel = $i == date('Y') ? ' selected="selected"' : '';
                          echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                        }
                        ?>
                      </select>
                    </div> <!-- /.form-group -->
                  </div>
                </small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Surveilans</a></li>
                <li class="active">Dashboard Ruang</li>
              </ol>
            </section>
          </div>
        </div>
      </div>

      <!-- MAIN CONTENT (ISI HALAMAN MULAI) -->
      <section class="content container-fluid"><br>
        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-5">
            <div class="box box-default">
              <div class="box-body">

                <ul class="sidebar-menu" data-widget="tree">
                  <li id="index-chart"><a href="content/laporan-chart.php" style="color:black;"><span>KATETER V PERIFER</span></a></li>
                  <li><a href="#" style="color:black;"><span>KATETER V CENTRAL</span></a></li>
                  <li><a href="#" style="color:black;"><span>KATETER UMBILIKAL</span></a></li>
                  <li><a href="#" style="color:black;"><span>DOUBLE LUMEN</span></a></li>
                  <li><a href="#" style="color:black;"><span>DOWER KATETER URINE</span></a></li>
                  <li><a href="#" style="color:black;"><span>VENTILATOR ASSOCIATED PNEUMONIA (VAP)</span></a></li>
                  <li><a href="#" style="color:black;"><span>INFEKSI LUKA OPERASI</span></a></li>
                  <li><a href="#" style="color:black;"><span>INFEKSI LUKA EPISIOTOMI</span></a></li>
                  <li><a href="#" style="color:black;"><span>DEKUBITUS</span></a></li>
                  <li><a href="#" style="color:black;"><span>PERAWAT TERPAJAN</span></a></li>
                </ul>
                <!-- /.sidebar-menu -->

              </div>
              <!-- ./box-body -->
            </div>
            <!-- ./box-default -->
          </div>
          <!-- ./col-md-6 -->
          <!-- Kotak Ends -->

          <!-- Legends -->
          <div class="col-md-7">
            <!-- <h4 style="font-weight:bold;">Keterangan</h4>
            <button type="" class="btn bg-red btn-flat margin"></button>Jumlah Kejadian Meningkat dengan Bulan Lalu<br>
            <button type="" class="btn bg-yellow btn-flat margin"></button>Jumlah Kejadian Sama dengan Bulan Lalu<br>
            <button type="" class="btn bg-green btn-flat margin"></button>Jumlah Kejadian Menurun dengan Bulan Lalu<br><br><br> -->

            <div id="insert-chart"></div>

          </div>
          <!-- ./col-md-5 -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content (ISI HALAMAN SELESAI) -->

    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Universitas Islam Indonesia
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2018 <a href="#">Informatika</a>.</strong> All rights reserved.
    </footer>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="bower_components/raphael/raphael.min.js"></script>
  <script src="bower_components/morris.js/morris.min.js"></script>
  <!-- Slimscroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $("#index-chart a").click(function(){
        url = $(this).attr("href");
        $("#insert-chart").load(url);
        return false;
      });
      $(document).ajaxStart(function(){
        $("#insert-chart").css({'display':'none'});
      });
      $(document).ajaxComplete(function(){
        $("#insert-chart").slideDown('slow');
      });
    });
  </script>

  <script>
  $(function () {
    "use strict";
      //BAR CHART
      
      $(".box-chart").boxWidget();

      // Bar charts using inline values
      $('.sparkbar').sparkline('html', {type: 'bar'});

      // Tri-state charts using inline values
      $('.sparktristate').sparkline('html', {type: 'tristate'});
      $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});
    });
  </script>

  <script>
    $(function () {
      $(".box-chart").boxWidget();
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
      })
    })
  </script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience. -->

  </body>
  </html>