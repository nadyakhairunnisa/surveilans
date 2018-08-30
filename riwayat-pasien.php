<?php
include("connect/connect.php");
$norm=$_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM identitas_pasien ip JOIN keadaan_pasien kp ON (ip.no_rm = kp.no_rm) JOIN pemakaian_ruangan pr ON (pr.id_keadaan = kp.id_keadaan) WHERE ip.no_rm =$norm LIMIT 1"));
?>

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
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green-light sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header"  style="background-color: white;">

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
          <li class="active treeview">
            <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Pasien</a></li>
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
      <section class="content-header">
        <h1>
          Riwayat Pasien
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Surveilans</a></li>
          <li>Data Pasien</li>
          <li class="active">Riwayat Pasien</li>
        </ol>
      </section>

      <!-- MAIN CONTENT (ISI HALAMAN MULAI) -->
      <section class="content container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="images/patient.png" alt="User profile picture">

                <h3 class="profile-username text-center"><?php echo $data['nama_pasien']; ?></h3>

                <p class="text-muted text-center"><?php echo $data['no_rm']; ?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Ruangan</b> <div class="pull-right" style="color: #689999;">Kesehatan Anak</div>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b><div class="pull-right" style="color: #689999;"><?php echo $data['jenis_kelamin']; ?></div>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <div class="pull-right" style="color: #689999;"><?php echo $data['tanggal_lahir']; ?></div>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <p class="text-muted"><?php echo $data['alamat']; ?></p>
                  </li>
                </ul>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Informasi Keadaan</a></li>
                <li><a href="#timeline" data-toggle="tab" data-myrelated="#insert-tabel">Informasi Pemasangan</a></li>
                <li><a href="#settings" data-toggle="tab">Edit Informasi Pasien</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                <!-- Start Informasi Keadaan -->
                <br>
                  <strong><i class="fa fa-medkit margin-r-5"></i> Diagnosa Akhir : </strong>DBD<br><br>
                  <div class="row">
                    <div class="col-md-4">
                      <strong><i class="fa fa-calendar margin-r-5"></i> Tanggal Masuk : </strong>13 Mei 2018<br><br>

                      <strong><i class="fa fa-file-text-o margin-r-5"></i> Cara Masuk : </strong>IGD
                    </div>
                    <div class="col-md-4">
                      <strong><i class="fa fa-calendar margin-r-5"></i> Tanggal Keluar : </strong>-<br><br>

                      <strong><i class="fa fa-file-text-o margin-r-5"></i> Keadaan Keluar : </strong>-
                    </div>
                    <div class="col-md-4">
                      <h4><small><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i>Edit Informasi Keadaan</a></small><h4>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-4">
                      <h4 style="color: #689999;"><strong>Riwayat Pemakaian Ruangan</strong></h4>
                    </div>
                    <div class="col-md-4">
                      <h4><small><a href="create-data-ruangan.php"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemakaian Ruangan</a></small><h4>
                    </div>
                  </div><br>

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Ruangan</th>
                        <th>Tanggal Masuk</th>
                        <th>Jam Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Jam Keluar</th>
                        <th>Dokter</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>IGD</td>
                        <td>13 Mei 2018</td>
                        <td>08.00</td>
                        <td>13 Mei 2018</td>
                        <td>10.00</td>
                        <td>Anita Putri</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                      <tr>
                        <td>Kes.Anak</td>
                        <td>13 Mei 2018</td>
                        <td>10.30</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Hendi Wijaya</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                    </tbody>
                  </table>

                </div>
                <!-- /.End Informasi Keadaan -->
                <div class="tab-pane" id="timeline">
                  <!-- Start Informasi Pemasangan -->
                  <br>
                  <strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemasangan : </strong>Kateter V Perifer<br><br>
                  <strong><i class="fa fa-medkit margin-r-5"></i> Tujuan Pemasangan : </strong>Pemberian Obat Sitostatika<br><br>

                  <hr>

                  <div class="row">
                    <div class="col-md-4">
                      <h4 style="color: #689999;"><strong>Riwayat Pemasangan</strong></h4>
                    </div>
                    <div class="col-md-4">
                      <h4><small><a href="create-data-pemasangan.html"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemasangan</a></small><h4>
                    </div>
                  </div><br>

                  <div id="pasang">
                    <a href="content/tabel-riwayat-pemasangan.html" class="btn btn-block btn-primary btn-xs">Lihat</a>
                  </div>

                  <!-- <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Lokasi</th>
                        <th>Tanggal Pasang</th>
                        <th>Tanggal Lepas</th>
                        <th>Total Hari</th>
                        <th>Tanggal Infeksi</th>
                        <th>Sistolik < 90mmHg</th>
                        <th>Nadi</th>
                        <th>Suhu >38C</th>
                        <th>Suhu < 37C</th>
                        <th>Apnu</th>
                        <th>Menggigil</th>
                        <th>Nyeri</th>
                        <th>Merah</th>
                        <th>Kalor</th>
                        <th>Pus</th>
                        <th>Bengkak</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>IGD</td>
                        <td>13 Mei 2018</td>
                        <td>08.00</td>
                        <td>13 Mei 2018</td>
                        <td>10.00</td>
                        <td>Anita Putri</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                      <tr>
                        <td>Kes.Anak</td>
                        <td>13 Mei 2018</td>
                        <td>10.30</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Hendi Wijaya</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                    </tbody>
                  </table> -->
                </div>
                <!-- /.End Informasi Pemasangan -->

                <div class="tab-pane" id="settings">
                  <!-- Start Edit Informasi -->
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nama</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputNoRM" class="col-sm-2 control-label">No.RM</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNoRM" placeholder="No.RM">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputGender" class="col-sm-2 control-label">Jenis Kelamin</label>

                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-3">
                            <label class="radio-inline">
                              <input type="radio" name="gender" id="femaleRadio" value="Perempuan">Perempuan
                            </label>
                          </div>
                          <div class="col-sm-3">
                            <label class="radio-inline">
                              <input type="radio" name="gender" id="maleRadio" value="Laki-Laki">Laki-Laki
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputTanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                      <div class="col-sm-10">
                        <input type="date" id="inputTanggalLahir" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>

                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputAlamat" placeholder="Alamat"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.End Edit Informasi -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

          <div class="col-md-12">
            <div id="insert-tabel"></div>
          </div>
        </div>

        <!-- /.row -->

        <!-- <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom">
              <div class="tab-content">
                <div class="tab-pane" id="tabelriwayat"> -->
                  <!-- Start Informasi Pemasangan -->

                  <!-- <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Lokasi</th>
                        <th>Tanggal Pasang</th>
                        <th>Tanggal Lepas</th>
                        <th>Total Hari</th>
                        <th>Tanggal Infeksi</th>
                        <th>Sistolik < 90mmHg</th>
                        <th>Nadi</th>
                        <th>Suhu >38C</th>
                        <th>Suhu < 37C</th>
                        <th>Apnu</th>
                        <th>Menggigil</th>
                        <th>Nyeri</th>
                        <th>Merah</th>
                        <th>Kalor</th>
                        <th>Pus</th>
                        <th>Bengkak</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>IGD</td>
                        <td>13 Mei 2018</td>
                        <td>08.00</td>
                        <td>13 Mei 2018</td>
                        <td>10.00</td>
                        <td>Anita Putri</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                      <tr>
                        <td>Kes.Anak</td>
                        <td>13 Mei 2018</td>
                        <td>10.30</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Hendi Wijaya</td>
                        <td style="text-align: center;"><a href="create-data-ruangan.php"><i class="fa fa-pencil margin-r-5"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div> -->
                <!-- /.End Informasi Pemasangan -->
              <!-- </div>
            </div>
          </div>
        </div> -->

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
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $("a[data-toggle][data-myrelated]").on("show.bs.tab", function (e) {
      var myrelated = $($(this).data("myrelated"));
      myrelated.show();
    });
    $("a[data-toggle][data-myrelated]").on("hide.bs.tab", function (e) {
      var myrelated = $($(this).data("myrelated"));
      myrelated.hide();
    });
  });
</script>

<script>
  $(function () {
    $("#pasang a").click(function(){
      url = $(this).attr("href");
      $("#insert-tabel").load(url);
      return false;
    });
    $(document).ajaxStart(function(){
      $("#insert-chart").css({'display':'none'});
    });
    $(document).ajaxComplete(function(){
      $("#insert-tabel").slideDown('slow');
    });
  });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience. -->

</body>
</html>