<?php
include("connect/connect.php");
?>

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
          <li class="active"><a href="#"><i class="glyphicon glyphicon-stats"></i><span>DASHBOARD</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-plus-circle"></i><span>Tambah Data</span>
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
            <a href="#"><i class="glyphicon glyphicon-th-list"></i><span>Data</span>
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
          <li><a href="laporan.php"><i class="fa fa-file-excel-o" aria-hidden="true"></i><span>Laporan</span></a></li>
          <li><a href="login.html"><i class="glyphicon glyphicon-log-out"></i><span>Logout</span></a></li>
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
                <div class="col-md-4">
                  JUMLAH KEJADIAN INFEKSI
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
                  <div class="col-sm-2">
                    <a href="index-rekapitulasi.php" class="btn btn-sm btn-default btn-flat pull-right" style="border-color:gray;">Lihat Rekapitulasi</a>
                  </div><div class="col-sm-2">
                  <a href="index-harian.php" class="btn btn-sm btn-default btn-flat pull-right" style="border-color:gray;">Lihat Dashboard Harian</a>
                </div>
              </small>
            </h1>
          </section>
        </div>
      </div>
    </div>

    <!-- MAIN CONTENT (ISI HALAMAN MULAI) -->
    <section class="content container-fluid"><br>
      <div class="row">
        <!-- Kotak Start -->
        <div class="col-md-6">
          <div class="box box-default">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Berdasarkan Ruang Rawat Inap (Bulanan)</h3>          
              </div><br>
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>2
                  </div>
                  <a href="#" class="small-box-footer">PAV.MELATI <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
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
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-exchange"></i>
                  </div>
                  <a href="#" class="small-box-footer">PAV.ANYELIR <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-exchange"></i>
                  </div>
                  <a href="#" class="small-box-footer">PAV.ALAMANDA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">PAV.DAHLIA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">PAV.AMARILIS <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" id="index-chart">
                  <div class="inner">
                    <h3> 11</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>3
                  </div>
                  <a class="small-box-footer" data-toggle="modal" data-target="#myModal">KES.ANAK <i class="fa fa-arrow-circle-right"></i></a>
                  <!-- <div class="small-box-button" type="button" data-toggle="modal" data-target="#myModal">KES.ANAK<</div> -->
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white" id="index-chart">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>2
                  </div>
                  <a href="#" class="small-box-footer">NUSA INDAH <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
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
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">CASABLANCA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">CATLEYA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">ANGGREK <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">TULIP <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">KEMUNING <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">PERISTI <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">BOUGENVILE <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3> 2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">SAKURA <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- ./box-default -->
        </div>
        <!-- ./col-md-6 -->
        <!-- Kotak Ends -->

        <!-- Legends -->
        <div class="col-md-6">
          <!-- Box jenis infeksi -->
          <div class="box box-default">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Berdasarkan Jenis Infeksi (Bulanan)</h3>          
              </div><br>

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" id="index-chart">
                  <div class="inner">
                    <!-- <p>IADP & Phlebitis</p> -->
                    <h3>5</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>3
                  </div>
                  <!-- <a href="content/index2-chart.html" class="small-box-footer">IADP & Phlebitis <i class="fa fa-arrow-circle-right"></i></a> -->
                  <a class="small-box-footer" data-toggle="modal" data-target="#myModal2">Phlebitis <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <!-- <p>ISK</p> -->
                    <h3>2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>2
                  </div>
                  <a href="#" class="small-box-footer">IADP <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <!-- <p>ISK</p> -->
                    <h3>2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-up"></i>2
                  </div>
                  <a href="#" class="small-box-footer">ISK <i class="fa fa-arrow-circle-right"></i></a>
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
                    <i class="fa fa-caret-up"></i>2
                  </div>
                  <a href="#" class="small-box-footer">VAP <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <!-- <div class="col-lg-1 col-xs-6"></div> -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <!-- <p>IDO</p> -->
                    <h3>2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-exchange"></i>
                  </div>
                  <a href="#" class="small-box-footer">IDO <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- </div> -->
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <!-- <p>ILE</p> -->
                    <h3>2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-exchange"></i>
                  </div>
                  <a href="#" class="small-box-footer">Dekubitus <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <!-- <p>ILE</p> -->
                    <h3>2</h3>
                  </div>
                  <div class="icon">
                    <i class="fa fa-caret-down"></i>2
                  </div>
                  <a href="#" class="small-box-footer">Terpajan <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- ./box-default -->

          <!-- table news update -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">BERITA BULAN INI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Kejadian</th>
                  <th>Pemasangan</th>
                  <th>Ruangan</th>
                  <th>Tanggal</th>
                </tr>
                <tr>
                  <td>Infeksi Phlebitis</td>
                  <td>Kateter V Perifer</td>
                  <td>Catleya</td>
                  <td>12 Agustus 2018</td>
                </tr>
                <tr>
                  <td>Infeksi Saluran Kemih</td>
                  <td>Kateter Urine</td>
                  <td>Pav.Dahlia</td>
                  <td>9 Agustus 2018</td>
                </tr>
                <tr>
                  <td>Infeksi IADP</td>
                  <td>Kateter V Central</td>
                  <td>Peristi</td>
                  <td>6 Agustus 2018</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col-md-6 -->
      </div>
      <!-- ./row -->

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Kejadian di Ruang Kesehatan Anak Juli 2018</h4>
            </div>
            <div class="modal-body">
              <!-- TABLE -->
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Jenis Infeksi</th>
                      <th>Jumlah</th>
                      <th>Rate MIL</th>
                      <th>Tingkat Rate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>IADP & Phlebitis</td>
                      <td>5</td>
                      <td style="color:red;font-weight:bold;">16.22%</td>
                      <td>
                        <span class="sparkbar">8,9,3,5,8,5,10</span>
                      </td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>ISK</a></td>
                      <td>4</td>
                      <td>1.43%</td>
                      <td>
                        <span class="sparkbar">3,5,8,5,10,8,4</span>
                      </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>VAP</td>
                      <td>0</td>
                      <td>0%</td>
                      <td>
                        <span class="sparkbar">6,8,9,5,4,2,1</span>
                      </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>IDO</td>
                      <td>2</td>
                      <td>0.89%</td>
                      <td>
                        <span class="sparkbar">9,4,5,3,2,1,2</span>
                      </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>ILE</td>
                      <td><span class="label label-success"></span>0</td>
                      <td>0%</td>
                      <td>
                        <span class="sparkbar">1,2,3,0,2,1,0</span>
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>TOTAL</th>
                      <th></th>
                      <th>11</th>
                      <th>9,08%</th>
                      <th><span class="sparkbar">10,8,9,4,5,11,14</span></th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive --><br>

              <span class="label label-danger">
                Satu atau Lebih Rate MIL(0%) Infeksi melebihi Standar
              </span>
            </div>
            <div class="modal-footer">
              <a href="index-ruang-detail.php" class="btn btn-default">Lihat Selengkapnya</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <!-- /.Modal -->

      <!-- Modal -->
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Kejadian di Ruang Kesehatan Anak Juli 2018</h4>
            </div>
            <div class="modal-body">
              <!-- TABLE -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Jenis Pemasangan</th>
                    <th>Jumlah Pasien Terpasang</th>
                    <th>Jumlah Terjadi Infeksi</th>
                    <th>Lama Hari Terpasang</th>
                    <th>Rate MIL (0%)</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Kateter V Perifer</td>
                    <td>73</td>
                    <td>3</td>
                    <td>185</td>
                    <td style="color:red;font-weight:bold;">16.22</td>
                    <td><a type="button" class="btn btn-block btn-primary btn-xs" href="index-jenis-detail.php">Lihat Selengkapnya</a></td>
                  </tr>
                  <tr>
                    <td>Kateter V Central</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td><a type="button" class="btn btn-block btn-primary btn-xs" href="riwayat-pasien.php">Lihat Selengkapnya</a></td>
                  </tr>
                  <tr>
                    <td>Umbilikal</td>
                    <td>13</td>
                    <td>0</td>
                    <td>72</td>
                    <td>0</td>
                    <td><a type="button" class="btn btn-block btn-primary btn-xs" href="riwayat-pasien.php">Lihat Selengkapnya</a></td>
                  </tr>
                  <tr>
                    <td>Double Lumen</td>
                    <td>22</td>
                    <td>2</td>
                    <td>1398</td>
                    <td>1.43</td>
                    <td><a type="button" class="btn btn-block btn-primary btn-xs" href="riwayat-pasien.php">Lihat Selengkapnya</a></td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Total</th>
                    <th>108</th>
                    <th>5</th>
                    <th>1655</th>
                    <th>3.02</th>
                  </tr>
                </tfoot>
              </table><br>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>
      <!-- /.Modal -->

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