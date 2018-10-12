<?php
include("connect/connect.php");
$this_date = date('Y-m-d');
$last_date = mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
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
  <!-- Data Tables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
          <li class="active"><a href="index.php"><i class="glyphicon glyphicon-stats"></i><span>DASHBOARD</span></a></li>
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
                <form action="indexharian.php" method="post">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <input type="date" name="tanggal" class="form-control" style="font-size: 13px;" value="<?php echo $this_date; ?>" required>
                    </div> <!-- /.form-group -->
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-primary" type="submit" style="border-color:gray;">Filter</button>
                  </div>
                  <div class="col-sm-2">
                    <a href="index.php" class="btn btn-primary" style="border-color:gray;">Lihat Data Bulan Ini</a>
                    <!-- <button class="btn btn-primary" type="submit" style="border-color:gray;">Lihat Hari Ini</button> -->
                  </div>
                  <div class="col-sm-1">
                    <a href="index-rekapitulasi.php" class="btn btn-primary" style="border-color:gray;">Lihat Rekapitulasi</a>
                    <!-- <button class="btn btn-primary" type="submit" style="border-color:gray;">Lihat Hari Ini</button> -->
                  </div>
                </form>
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
                <h3 class="box-title">Berdasarkan Ruang Rawat Inap (Hari Ini)</h3>          
              </div><br>

              <?php

              $query1 = mysqli_query($conn, "SELECT * FROM ruangan");
              foreach ($query1 as $index => $data1){

                $kode = $data1['kode_ruangan'];
                $ruangan = $data1['nama_ruangan'];

                $surv = mysqli_query($conn, "SELECT DISTINCT(jenis_surveilans) FROM keadaan_pasien");
                $count = 0;
                while($row = mysqli_fetch_array($surv)){

                  $svlns = strtolower($row['jenis_surveilans']);

                  $countquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(s.id_surv) FROM surv_$svlns s 
                    JOIN keadaan_pasien kp ON (s.id_keadaan = kp.id_keadaan)
                    JOIN pemakaian_ruangan pr ON (pr.id_keadaan = kp.id_keadaan)
                    WHERE s.terjadi_infeksi = 'Ya' AND pr.kode_ruangan = '$kode' AND s.tanggal_infeksi = '$this_date'"));
                  $countdata = $countquery['COUNT(s.id_surv)'];
                  $count = $count + $countdata;
                }

              ?>

              <div class="col-lg-3 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3><?php echo $count; ?></h3>
                  </div>
                  <div class="icon">
                    <!-- <i class="fa fa-caret-up"></i>2 -->
                  </div>
                  <a class="small-box-footer" data-toggle="modal" data-target="#myModal-<?php echo $index; ?>"><?php echo $ruangan ?>
                  <!-- <i class="fa fa-arrow-circle-right"></i> -->
                  </a>
                </div>
              </div>
              <!-- ./col -->

              <!-- Modal -->
              <div class="modal fade" id="myModal-<?php echo $index; ?>" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Kejadian di Ruang <?php echo $ruangan ?> Juli 2018</h4>
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

              <?php } ?>
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
                <h3 class="box-title">Berdasarkan Jenis Infeksi (Hari Ini)</h3>          
              </div><br>

              <?php

              $query = mysqli_query($conn, "SELECT nama_infeksi FROM infeksi");
              foreach ($query as $index1 => $data){

                $surveilans = $data['nama_infeksi'];

                $count = 0;

                $countquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(s.id_surv) FROM surv_$surveilans s 
                  JOIN keadaan_pasien kp ON (s.id_keadaan = kp.id_keadaan)
                  JOIN pemakaian_ruangan pr ON (pr.id_keadaan = kp.id_keadaan)
                  WHERE s.terjadi_infeksi = 'Ya' AND kp.jenis_surveilans = '$surveilans' AND s.tanggal_infeksi = $this_date"));
                $countdata = $countquery['COUNT(s.id_surv)'];
                $count = $count + $countdata;

              ?>

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white" id="index-chart">
                  <div class="inner">
                    <!-- <p>IADP & Phlebitis</p> -->
                    <h3><?php echo $count; ?></h3>
                  </div>
                  <div class="icon">
                    <!-- <i class="fa fa-caret-up"></i>3 -->
                  </div>
                  <!-- <a href="content/index2-chart.html" class="small-box-footer">IADP & Phlebitis <i class="fa fa-arrow-circle-right"></i></a> -->
                  <a class="small-box-footer" data-toggle="modal" data-target="#myModal2-<?php echo $index1; ?>"><?php echo $surveilans; ?>
                  <!-- <i class="fa fa-arrow-circle-right"></i> -->
                  </a>
                </div>
              </div>
              <!-- ./col -->

              <!-- Modal -->
              <div class="modal fade" id="myModal2-<?php echo $index1; ?>" role="dialog">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Kejadian <?php echo $surveilans; ?> Bulan Juli 2018</h4>
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

              <?php } ?>
            </div>
            <!-- ./box-body -->
          </div>
          <!-- ./box-default -->

          <!-- table news update -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">BERITA HARI INI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Kejadian</th>
                  <th>Invasif</th>
                  <th>Ruangan</th>
                  <th>Tanggal</th>
                </tr>
                <?php

                $infeksi_query = mysqli_query($conn, "SELECT id_keadaan, jenis_surveilans FROM keadaan_pasien");
                while($infeksi_data = mysqli_fetch_array($infeksi_query)){

                  $svlns = $infeksi_data['jenis_surveilans'];

                  $news_data = mysqli_query($conn, "SELECT sv.jenis_invasif, r.nama_ruangan, sv.tanggal_infeksi FROM keadaan_pasien kp JOIN surv_$svlns sv ON (kp.id_keadaan = sv.id_keadaan) JOIN pemakaian_ruangan pr ON (kp.id_keadaan = pr.id_keadaan) JOIN ruangan r ON (pr.kode_ruangan = r.kode_ruangan) WHERE sv.tanggal_infeksi = $this_date ORDER BY sv.tanggal_infeksi DESC LIMIT 5");
                  while($news = mysqli_fetch_array($news_data)){

                ?>
                <tr>                
                  <!-- <td>Infeksi <?php echo $svlns ?></td>
                  <td><?php echo $news['jenis_invasif']; ?></td>
                  <td><?php echo $news['nama_ruangan']; ?></td>
                  <td><?php echo $news['tanggal_infeksi']; ?></td> -->
                </tr>
                <?php } } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col-md-6 -->
      </div>
      <!-- ./row -->

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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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