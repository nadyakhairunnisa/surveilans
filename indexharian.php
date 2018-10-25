<?php
include("connect/connect.php");
$this_date = $_POST['tanggal'];
$last_date = date('Y-m-d', strtotime('-1 days', strtotime($this_date)));
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
                      <input type="date" name="tanggal" class="form-control" style="font-size: 13px;margin-left:-30px;" value="<?php echo $this_date; ?>" required>
                    </div> <!-- /.form-group -->
                  </div>
                  <div class="col-sm-1">
                    <button class="btn btn-primary" type="submit" style="border-color:gray;margin-left:-50px;">Filter</button>
                  </div>
                  <div class="col-sm-2">
                    <a href="index2.php" class="btn btn-primary" style="border-color:gray;margin-left:-30px;">Lihat Data Hari Ini</a>
                    <!-- <button class="btn btn-primary" type="submit" style="border-color:gray;">Lihat Hari Ini</button> -->
                  </div>
                  <div class="col-sm-2">
                    <a href="index.php" class="btn btn-primary" style="border-color:gray;margin-left:-60px;">Lihat Data Bulan Ini</a>
                    <!-- <button class="btn btn-primary" type="submit" style="border-color:gray;">Lihat Hari Ini</button> -->
                  </div>
                  <div class="col-sm-1">
                    <a href="index3.php" class="btn btn-primary" style="border-color:gray;margin-left:-80px;">Lihat Rekapitulasi</a>
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
        <div class="col-md-8">
          <div class="box box-default">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Berdasarkan Ruang Rawat Inap (RIWAYAT)</h3>          
              </div><br>

              <?php

              $query1 = mysqli_query($conn, "SELECT * FROM ruangan");
              foreach ($query1 as $index => $data1){

                $kode = $data1['kode_ruangan'];
                $ruangan = $data1['nama_ruangan'];

                $surv = mysqli_query($conn, "SELECT nama_infeksi FROM infeksi");
                $count = 0;
                $countlast = 0;
                while($row = mysqli_fetch_array($surv)){

                  $svlns = strtolower($row['nama_infeksi']);

                  $countquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(s.id_surv) FROM surv_$svlns s
                    JOIN pemakaian_ruangan pr ON (s.id_pemakaian_ruangan = pr.id_pemakaian_ruangan)
                    WHERE s.terjadi_infeksi = 'Ya' AND pr.kode_ruangan = '$kode' AND s.tanggal_infeksi = '$this_date'"));
                  $countdata = $countquery['COUNT(s.id_surv)'];
                  $count = $count + $countdata;

                  $countquerylast = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(s.id_surv) FROM surv_$svlns s JOIN pemakaian_ruangan pr ON (s.id_pemakaian_ruangan = pr.id_pemakaian_ruangan)
                    WHERE s.terjadi_infeksi = 'Ya' AND pr.kode_ruangan = '$kode' AND s.tanggal_infeksi = '$last_date'"));
                  $countdatalast = $countquerylast['COUNT(s.id_surv)'];
                  $countlast = $countlast + $countdatalast;
                }

                $diff = $count - $countlast;

              ?>

              <div class="col-lg-2 col-xs-6" id="index-chart">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <h3><?php echo $count; ?></h3>
                  </div>
                  <div class="icon">
                    <?php if($diff>0){
                        echo "<div style='color:rgb(255,0,0,0.5);'><i class='fa fa-caret-up'></i>".$diff."</div>";
                      } else if($diff==0){
                        echo "<i class='fa fa-exchange' style='color:#b2d8b2;'></i>";
                      } else {
                        echo "<i class='fa fa-caret-down' style='color:rgba(0,174,227,0.4);'></i>".$diff;
                      }
                    ?>
                    <!-- <i class="fa fa-caret-up"></i>1 -->
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
                          <?php

                          $surv = mysqli_query($conn, "SELECT nama_infeksi FROM infeksi");
                          $i = 0;
                          while($row = mysqli_fetch_array($surv)){

                            $svlns = $row['nama_infeksi'];

                            $detailquery = mysqli_query($conn, "SELECT COUNT(s.id_surv) FROM surv_$svlns s 
                              JOIN pemakaian_ruangan pr ON (s.id_pemakaian_ruangan = pr.id_pemakaian_ruangan)
                              WHERE s.terjadi_infeksi = 'Ya' AND pr.kode_ruangan = (SELECT kode_ruangan FROM ruangan WHERE nama_ruangan = '$ruangan') s.tanggal_infeksi = '$this_date'");

                            while($detailrow = mysqli_fetch_array($detailquery)){                              
                              $countdata = $detailrow['COUNT(s.id_surv)'];
                          ?>

                          <tbody>
                            <tr>
                              <td><?php echo $i=$i+1; ?></td>
                              <td><?php echo $svlns; ?></td>
                              <td><?php echo $countdata; ?></td>
                              <td style="color:red;font-weight:bold;">16.22%</td>
                              <td>
                                <span class="sparkbar">8,9,3,5,8,5,10</span>
                              </td>
                            </tr>
                          </tbody>
                          <?php } } ?>                          
                          <tfoot>
                            <tr>
                              <th>TOTAL</th>
                              <th></th>
                              <th><?php echo $count; ?></th>
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
        <div class="col-md-4">
          <!-- Box jenis infeksi -->
          <div class="box box-default">
            <div class="box-body">
              <div class="box-header with-border">
                <h3 class="box-title">Berdasarkan Jenis Infeksi (RIWAYAT)</h3>          
              </div><br>

              <?php

              $query = mysqli_query($conn, "SELECT nama_infeksi FROM infeksi");
              foreach ($query as $index1 => $data){

                $surveilans = $data['nama_infeksi'];

                $count = 0;
                $countlast = 0;

                $countquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_surv) FROM surv_$surveilans WHERE terjadi_infeksi = 'Ya' AND tanggal_infeksi = '$this_date'"));
                $count = $countquery['COUNT(id_surv)'];
                // $count = $count + $countdata;

                $countquerylast = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_surv) FROM surv_$surveilans WHERE terjadi_infeksi = 'Ya' AND tanggal_infeksi = '$last_date'"));
                $countlast = $countquerylast['COUNT(id_surv)'];
                // $countlast = $countlast + $countdatalast;

                $diff = $count - $countlast;

              ?>

              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white" id="index-chart">
                  <div class="inner">
                    <!-- <p>IADP & Phlebitis</p> -->
                    <h3><?php echo $count; ?></h3>
                  </div>
                  <div class="icon">
                    <?php if($diff>0){
                        echo "<div style='color:rgb(255,0,0,0.5);'><i class='fa fa-caret-up'></i>".$diff."</div>";
                      } else if($diff==0){
                        echo "<i class='fa fa-exchange' style='color:#b2d8b2;'></i>";
                      } else {
                        echo "<i class='fa fa-caret-down' style='color:rgba(0,174,227,0.4);'></i>".$diff;
                      }
                    ?>
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
                        <?php 

                        $invsf = mysqli_query($conn, "SELECT nama_invasif FROM invasif WHERE jenis_surveilans = '$surveilans'");
                        $countpasien = 0;
                        while($invsfrow = mysqli_fetch_array($invsf)){
                          $invasif = $invsfrow['nama_invasif'];
                          $allquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_surv) FROM surv_$surveilans WHERE jenis_invasif = '$invasif' AND tanggal_infeksi = '$this_date'"));
                          $yaquery = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_surv) FROM surv_$surveilans WHERE jenis_invasif = '$invasif' AND terjadi_infeksi = 'Ya' AND tanggal_infeksi = '$this_date'"));

                        ?>
                        <tbody>
                          <tr>
                            <td><?php echo $invasif; ?></td>
                            <td><?php echo $allquery['COUNT(id_surv)']; ?></td>
                            <td><?php echo $yaquery['COUNT(id_surv)']; ?></td>
                            <td>(dummy)</td>
                            <td style="color:red;font-weight:bold;">(dummy)</td>
                            <td><a type="button" class="btn btn-block btn-primary btn-xs" href="index-jenis-detail.php">Lihat Selengkapnya</a></td>
                          </tr>
                        </tbody>
                        <?php 
                        $countpasien = $countpasien + $allquery['COUNT(id_surv)'];
                        } ?>
                        <tfoot>
                          <tr>
                            <th>Total</th>
                            <th><?php echo $countpasien; ?></th>
                            <th><?php echo $count; ?></th>
                            <th>(dummy)</th>
                            <th>(dummy)</th>
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

              <?php }

              // <!-- TERPAJAN -->

              $countpjn = 0;
              $countpjnlast = 0;

                $countquerypjn = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_kejadian_terpajan) FROM surv_terpajan WHERE tanggal_pajanan = '$this_date'"));
                $countpjn = $countquerypjn['COUNT(id_kejadian_terpajan)'];

                $countquerypjnlast = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(id_kejadian_terpajan) FROM surv_terpajan WHERE tanggal_pajanan = '$last_date'"));
                $countpjnlast = $countquerypjnlast['COUNT(id_kejadian_terpajan)'];

                $diff = $countpjn - $countpjnlast;

              ?>

              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-white" id="index-chart">
                  <div class="inner">
                    <!-- <p>IADP & Phlebitis</p> -->
                    <h3><?php echo $countpjn; ?></h3>
                  </div>
                  <div class="icon">
                    <?php if($diff>0){
                        echo "<div style='color:rgb(255,0,0,0.5);'><i class='fa fa-caret-up'></i>".$diff."</div>";
                      } else if($diff==0){
                        echo "<i class='fa fa-exchange' style='color:#b2d8b2;'></i>";
                      } else {
                        echo "<i class='fa fa-caret-down' style='color:rgba(0,174,227,0.4);'></i>".$diff;
                      }
                    ?>
                  </div>
                  <!-- <a href="content/index2-chart.html" class="small-box-footer">IADP & Phlebitis <i class="fa fa-arrow-circle-right"></i></a> -->
                  <a class="small-box-footer" data-toggle="modal" data-target="#myModal2-<?php echo $index1; ?>">Terpajan
                  <!-- <i class="fa fa-arrow-circle-right"></i> -->
                  </a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- ./box-body -->
          </div>
          <!-- ./box-default -->
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