<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>AdminLTE 2 | Morris.js Charts</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
  page. However, you can choose any other skin. Make sure you
  apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-green-light.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header"  style="background-color: white;">

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
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
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
              <li><a href="data-terpajan.php"><i class="fa fa-circle-o"></i>Terpajan</a></li>
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
                <div class="col-md-8">
                  KEJADIAN PEMASANGAN KATETER V PERIFER JULI 2018
                </div>
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
      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box collapsed-box">
              <div class="box-header">
                <h3 class="box-title">Tabel Rekapitulasi</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" style="font-size: 12px;">
                  <thead>
                    <tr>
                      <th>Ruang</th>
                      <th>Jumlah Pasien Terpasang</th>
                      <th>Jumlah Pasien Laki-Laki</th>
                      <th>Jumlah Pasien Perempuan</th>
                      <th>Jumlah Pasien Neonatal (0-28 Hr)</th>
                      <th>Jumlah Pasien Bayi (29Hr - 1Th)</th>
                      <th>Jumlah Pasien Balita (1-5Th)</th>
                      <th>Jumlah Pasien Anak-Anak (5 - 14Th)</th>
                      <th>Jumlah Pasien Dewasa (15 - 55Th)</th>
                      <th>Jumlah Pasien Lansia (>55Th)</th>
                      <th>Jumlah Infeksi</th>
                      <th>Lama Hari Terpasang</th>
                      <th>Rate MIL (0%)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ICU</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                    </tr>
                    <tr>
                      <td>Anyelir</td>
                      <td>50</td>
                      <td>40</td>
                      <td>100</td>
                      <td>90</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>Catleya</td>
                      <td>50</td>
                      <td>40</td>
                      <td>100</td>
                      <td>90</td>
                      <td>50</td>
                      <td>40</td>
                      <td>100</td>
                      <td>90</td>
                      <td>90</td>
                      <td>100</td>
                      <td>90</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>Bougenvile</td>
                      <td>75</td>
                      <td>65</td>
                      <td>100</td>
                      <td>90</td>
                      <td>40</td>
                      <td>100</td>
                      <td>90</td>
                      <td>50</td>
                      <td>40</td>
                      <td>100</td>
                      <td>90</td>
                      <td>90</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Total</th>
                      <th>275</th>
                      <th>235</th>
                      <th>400</th>
                      <th>360</th>
                      <th>65</th>
                      <th>100</th>
                      <th>90</th>
                      <th>40</th>
                      <th>100</th>
                      <th>90</th>
                      <th>50</th>
                      <th>40</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row --> 

        <div class="row">
          <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="box box-chart">
              <div class="box-header with-border">
                <h3 class="box-title">Grafik Kejadian</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body chart-responsive">
                <div class="chart" id="bar-chart" style="height: 300px;"></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="box box-chart">
              <div class="box-header with-border">
                <h3 class="box-title">Grafik Kejadian (Lanjutan)</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body chart-responsive">
                <div class="chart" id="bar-chart2" style="height: 300px;"></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->      
      </section>
      <!-- /.content -->
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

  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    "use strict";
    $(".box-chart").boxWidget();

      //BAR CHART 1
      var bar = new Morris.Bar({
        element: 'bar-chart',
        resize: true,
        data: [
        {y: 'ICU', a: 100, b: 90, c: 100, d: 90},
        {y: 'Pav.Melati', a: 75, b: 65, c: 100, d: 90},
        {y: 'Anyelir', a: 50, b: 40, c: 100, d: 90},
        {y: 'Pav.Mawar', a: 75, b: 65, c: 100, d: 90},
        {y: 'Catleya', a: 50, b: 40, c: 100, d: 90},
        {y: 'Bougenvile', a: 75, b: 65, c: 100, d: 90},
        {y: 'Dahlia', a: 100, b: 90, c: 100, d: 90},
        {y: 'Casablanca', a: 100, b: 90, c: 100, d: 90}
        ],
        barColors: ['#00a65a', '#f56954', '#00a65a', '#f56954'],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd'],
        labels: ['Jml. Pasien Terpasang', 'Jml. Infeksi (Plehibitis)', 'Lama Hari Terpasang', 'Rate MIL (%0)'],
        hideHover: 'auto'
      });

      //BAR CHART
      var bar = new Morris.Bar({
        element: 'bar-chart2',
        resize: true,
        data: [
        {y: 'Alamanda', a: 75, b: 65, c: 100, d: 90},
        {y: 'Anggrek', a: 50, b: 40, c: 100, d: 90},
        {y: 'Tulip', a: 75, b: 65, c: 100, d: 90},
        {y: 'Kemuning', a: 50, b: 40, c: 100, d: 90},
        {y: 'Kebidanan', a: 75, b: 65, c: 100, d: 90},
        {y: 'Flamboyan', a: 75, b: 65, c: 100, d: 90},
        {y: 'Amarilis', a: 75, b: 65, c: 100, d: 90},
        {y: 'Kes.Anak', a: 100, b: 90, c: 100, d: 90}
        ],
        barColors: ['#00a65a', '#f56954', '#00a65a', '#f56954'],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd'],
        labels: ['Jml. Pasien Terpasang', 'Jml. Infeksi (Plehibitis)', 'Lama Hari Terpasang', 'Rate MIL (%0)'],
        hideHover: 'auto'
      });
    });
  </script>
  <script>
    $(function () {
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
</body>
</html>
