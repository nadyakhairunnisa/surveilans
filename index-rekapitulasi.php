<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
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
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
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
      <a href="index2.html" class="logo">
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
          <li class="active"><a href="index.php"><i class="glyphicon glyphicon-stats"></i><span>DASHBOARD</span></a></li>
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
              <li><a href="data-terpajan.php"><i class="fa fa-circle-o"></i>Perawat</a></li>
              <li><a href="data-dokter.php"><i class="fa fa-circle-o"></i>Dokter</a></li>
              <li><a href="data-ruangan.php"><i class="fa fa-circle-o"></i>Ruangan</a></li>
            </ul>
          </li>
          <li><a href="laporan.php"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span>Laporan</span></a></li>
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
                <div class="col-md-5">
                  JUMLAH KEJADIAN INFEKSI PERIODE TAHUN
                </div>
                <small>
                  <div class="col-sm-1">
                    <div class="form-group">
                      <select id="ruangan" class="form-control" data-placeholder="Pilih Tahun" style="width: 180%;">
                        <option>2018</option>
                        <option>2017</option>
                        <option>2015</option>
                        <option>2014</option>
                        <option>2013</option>
                        <option>2012</option>
                        <option>2011</option>
                        <option>2010</option>
                        <option>2009</option>
                        <option>2008</option>
                        <option>2007</option>
                        <option>2006</option>
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
      <section class="content container-fluid">
      <br>
        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-6">
          <div class="box box-default">
          <div class="box-body">
            <div class="box-header with-border">
                <h3 class="box-title">Ruang Rawat Inap</h3>          
            </div><br>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red" id="index-chart">
                <div class="inner">
                <!-- <p>KES.ANAK</p> -->

                  <h3> 11</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>3
                </div>
                <a href="content/index-chart.html" class="small-box-footer">KES.ANAK <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white" id="index-chart">
                <div class="inner">
                  <!-- <p>NUSA INDAH</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>2
                </div>
                <a href="#" class="small-box-footer">NUSA INDAH <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>PAV.MELATI</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>2
                </div>
                <a href="#" class="small-box-footer">PAV.MELATI <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>PAV.MAWAR</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">PAV.MAWAR <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ICU</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">ICU <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ANYELIR</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">ANYELIR <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ALAMANDA</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">ALAMANDA <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>KEBIDANAN</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">KEBIDANAN <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>FLAMBOYAN</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">FLAMBOYAN <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>DAHLIA</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">DAHLIA <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>AMARILIS</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">AMARILIS <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>CASABLANCA</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">CASABLANCA <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>CATLEYA</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">CATLEYA <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ANGGREK</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">ANGGREK <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>TULIP</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">TULIP <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6" id="index-chart">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>KEMUNING</p> -->

                  <h3> 2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-down"></i>2
                </div>
                <a href="#" class="small-box-footer">KEMUNING <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div></div></div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->

          <!-- Legends -->
          <div class="col-md-6">
            <!-- <h4 style="font-weight:bold;">Keterangan</h4>
            <button type="" class="btn bg-red btn-flat margin"></button>Jumlah Kejadian Meningkat dengan Bulan Lalu<br>
            <button type="" class="btn bg-yellow btn-flat margin"></button>Jumlah Kejadian Sama dengan Bulan Lalu<br>
            <button type="" class="btn bg-green btn-flat margin"></button>Jumlah Kejadian Menurun dengan Bulan Lalu<br><br><br> -->

            <!-- <div id="insert-chart"></div> -->

            <div class="box box-default">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Jenis Infeksi</h3>          
              </div><br>
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red" id="index-chart">
                <div class="inner">
                  <!-- <p>IADP & Phlebitis</p> -->
                  <h3>5</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>3
                </div>
                <a href="content/index2-chart.html" class="small-box-footer">IADP & Phlebitis <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-5 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ISK</p> -->
                  <h3>2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>2
                </div>
                <a href="#" class="small-box-footer">Infeksi Saluran Kemih <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>VAP</p> -->
                  <h3>2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-arrow-up"></i>2
                </div>
                <a href="#" class="small-box-footer">VAP <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-1 col-xs-6"></div>
            <div class="col-lg-5 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>IDO</p> -->
                  <h3>2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">Infeksi Daerah Operasi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- </div> -->
            <!-- ./col -->
            <div class="col-lg-5 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-white">
                <div class="inner">
                  <!-- <p>ILE</p> -->
                  <h3>2</h3>
                </div>
                <div class="icon">
                  <i class="fa fa-exchange"></i>
                </div>
                <a href="#" class="small-box-footer">Infeksi Luka Episiotomi <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->

          </div></div></div>
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
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="bower_components/chart.js/Chart.js"></script>
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience. -->

  </body>
  </html>