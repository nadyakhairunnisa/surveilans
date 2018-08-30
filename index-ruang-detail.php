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
                <div class="col-md-6">
                  KEJADIAN DI RUANG KESEHATAN ANAK
                </div>
                <small>
                  <div class="col-sm-2" style="margin-right:-50px;">
                    <div class="form-group">
                      <select id="ruangan" class="form-control" data-placeholder="Pilih Bulan" style="width: 80%;">
                        <option>Januari</option>
                        <option>Februari</option>
                        <option>Maret</option>
                        <option>April</option>
                        <option>Mei</option>
                        <option>Juni</option>
                        <option selected>Juli</option>
                        <option>Agustus</option>
                        <option>September</option>
                        <option>Oktober</option>
                        <option>November</option>
                        <option>Desember</option>
                      </select>
                    </div> <!-- /.form-group -->
                  </div>
                  <div class="col-sm-1">
                    <div class="form-group">
                      <select id="ruangan" class="form-control" data-placeholder="Pilih Tahun" style="width: 140%;">
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
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="box box-chart">
              <div class="box-header with-border">
                <h3 class="box-title">Pemasangan Penyebab IADP & Phlebitis</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Jenis Pemasangan</th>
                        <th>Jumlah Pasien Terpasang</th>
                        <th>Jumlah Terjadi Infeksi</th>
                        <th>Lama Hari Terpasang</th>
                        <th>Rate MIL (0%)</th>
                        <th>Tingkat Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kateter V Perifer</td>
                        <td>73</td>
                        <td>3</td>
                        <td>185</td>
                        <td style="color:red;font-weight:bold;">16.22%</td>
                        <td>
                          <span class="sparkbar">8,9,3,5,8,5,10</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Kateter V Central</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">3,5,8,5,10,8,4</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Umbilikal</td>
                        <td>13</td>
                        <td>0</td>
                        <td>72</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">6,8,9,5,4,2,1</span>
                        </td>
                      </tr>
                      <tr>
                        <td>Double Lumen</td>
                        <td>22</td>
                        <td>2</td>
                        <td>1398</td>
                        <td>1.43</td>
                        <td>
                          <span class="sparkbar">9,4,5,3,2,1,2</span>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Total</th>
                        <th>108</th>
                        <th>5</th>
                        <th>1655</th>
                        <th>3.02</th>
                        <th><span class="sparkbar">10,8,9,4,5,11,14</span></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="box box-chart collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Pemasangan Penyebab Infeksi Saluran Kemih</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Jenis Pemasangan</th>
                        <th>Jumlah Pasien Terpasang</th>
                        <th>Jumlah Terjadi Infeksi</th>
                        <th>Lama Hari Terpasang</th>
                        <th>Rate MIL (0%)</th>
                        <th>Tingkat Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kateter Urine</td>
                        <td>73</td>
                        <td>3</td>
                        <td>185</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">8,9,3,5,8,5,10</span>
                        </td>
                      </tr>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="box box-chart collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Pemasangan Penyebab VAP</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Jenis Pemasangan</th>
                        <th>Jumlah Pasien Terpasang</th>
                        <th>Jumlah Terjadi Infeksi</th>
                        <th>Lama Hari Terpasang</th>
                        <th>Rate MIL (0%)</th>
                        <th>Tingkat Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Ventilator</td>
                        <td>73</td>
                        <td>3</td>
                        <td>185</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">8,9,3,5,8,5,10</span>
                        </td>
                      </tr>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="box box-chart collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Infeksi Daerah Operasi</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Jenis Pemasangan</th>
                        <th>Jumlah Pasien Terpasang</th>
                        <th>Jumlah Terjadi Infeksi</th>
                        <th>Lama Hari Terpasang</th>
                        <th>Rate MIL (0%)</th>
                        <th>Tingkat Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Luka Operasi</td>
                        <td>73</td>
                        <td>3</td>
                        <td>185</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">8,9,3,5,8,5,10</span>
                        </td>
                      </tr>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- Kotak Start -->
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="box box-chart collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Infeksi Luka Episiotomi</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                      <tr>
                        <th>Jenis Pemasangan</th>
                        <th>Jumlah Pasien Terpasang</th>
                        <th>Jumlah Terjadi Infeksi</th>
                        <th>Lama Hari Terpasang</th>
                        <th>Rate MIL (0%)</th>
                        <th>Tingkat Rate</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Luka Episiotomi</td>
                        <td>73</td>
                        <td>3</td>
                        <td>185</td>
                        <td>0</td>
                        <td>
                          <span class="sparkbar">8,9,3,5,8,5,10</span>
                        </td>
                      </tr>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- ./col-md-8 -->
          <!-- Kotak Ends -->
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience. -->

  </body>
  </html>