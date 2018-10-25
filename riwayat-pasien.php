<?php
include("connect/connect.php");
$norm=$_GET['id'];
$dt = mysqli_query($conn, "SELECT * FROM identitas_pasien ip JOIN keadaan_pasien kp ON (ip.no_rm = kp.no_rm) JOIN pemakaian_ruangan pr ON (kp.id_keadaan = pr.id_keadaan) WHERE kp.no_rm =$norm LIMIT 1");
$data = mysqli_fetch_array($dt);

$surveilans = strtolower($data['jenis_surveilans']);

// $query = mysqli_query($conn, "SELECT * FROM surv_$surveilans WHERE id_keadaan = $data[id_keadaan]");
// $data3 = mysqli_fetch_array($query);

// if($surveilans=="phlebitis"){
//   $query = mysqli_query($conn, "SELECT * FROM surv_phlebitis WHERE id_keadaan = $data[id_keadaan]");
// } else if($surveilans=="iadp"){
//   $query = mysqli_query($conn, "SELECT * FROM surv_iadp WHERE id_keadaan = $data[id_keadaan]");
// } else if($surveilans=="isk"){
//   $query = mysqli_query($conn, "SELECT * FROM surv_isk WHERE id_keadaan = $data[id_keadaan]");
// } else if($surveilans=="ido"){
//   $query = mysqli_query($conn, "SELECT * FROM surv_ido WHERE id_keadaan = $data[id_keadaan]");
// } else {
//   $query = mysqli_query($conn, "SELECT * FROM surv_vap WHERE id_keadaan = $data[id_keadaan]");
// }
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
          <li class="active treeview">
            <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="data-pasien.php"><i class="fa fa-circle-o"></i>Pasien</a></li>
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
            <div class="box">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="images/patient.png" alt="User profile picture">

                <h3 class="profile-username text-center" style="font-weight: bold;"><?php echo $data['nama_pasien']; ?></h3>

                <p class="text-muted text-center">No.RM: <?php echo $data['no_rm']; ?></p>

                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b>Jenis Kelamin</b><div class="pull-right" style="color: #689999;"><?php echo $data['jenis_kelamin']; ?></div>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <div class="pull-right" style="color: #689999;"><?php echo $data['tanggal_lahir']; ?></div>
                  </li>
                  <li class="list-group-item">
                    <b>Usia</b> <div class="pull-right" style="color: #689999;"><?php echo $data['usia']." Tahun"; ?></div>
                  </li>
                  <li class="list-group-item">
                    <b>Kategori Usia</b> <div class="pull-right" style="color: #689999;"><?php echo $data['kategori_usia']; ?></div>
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

                <?php
                $dt1 = mysqli_query($conn, "SELECT * FROM identitas_pasien ip 
                  JOIN keadaan_pasien kp ON (ip.no_rm = kp.no_rm)
                  JOIN penyakit p ON (p.kode_penyakit = kp.kode_penyakit) WHERE kp.no_rm =$norm ORDER BY kp.tanggal_masuk_rs DESC");
                $no = 0;
                while($data1 = mysqli_fetch_array($dt1)){
                ?>

                <!-- Box Comment -->
                <div class="box box-widget collapsed-box">
                  <div class="box-header">
                    <!-- <div class="user-block"> -->
                    <span class="username" style="font-size: 20px; color:#72afd2; text-decoration:underline;"><strong>CATATAN MEDIS&nbsp</strong></span>
                    <span class="description">&nbsp<?php echo $data1['tanggal_masuk_rs']; ?></span>
                    <!-- </div> -->
                    <!-- /.user-block -->
                    <div class="box-tools">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    </div>
                    <!-- /.box-tools -->
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <strong><i class="fa fa-medkit margin-r-5"></i> Diagnosa Akhir : </strong><?php echo $data1['nama_penyakit']; ?><br><br>
                    <div class="row">
                      <div class="col-md-4">
                        <strong><i class="fa fa-calendar margin-r-5"></i> Tanggal Masuk : </strong><?php echo $data1['tanggal_masuk_rs']; ?><br><br>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Cara Masuk : </strong><?php echo $data1['cara_masuk']; ?><br><br>
                      </div>
                      <div class="col-md-4">
                        <strong><i class="fa fa-calendar margin-r-5"></i> Tanggal Keluar : </strong><?php echo $data1['tanggal_keluar_rs']; ?><br><br>

                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Keadaan Keluar : </strong><?php echo $data1['keadaan_keluar']; ?>
                      </div>
                      <div class="col-md-4">
                        <h4><small><a href="update-data-keadaan.php?id=<?php echo $data1['id_keadaan']; ?>"><i class="fa fa-pencil margin-r-5"></i>Edit Informasi Keadaan</a></small><h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Faktor Resiko : </strong><?php echo $data1['faktor_resiko']; ?>
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-md-4">
                        <h4 style="color: #689999;"><strong>Riwayat Pemakaian Ruangan</strong></h4>
                      </div>
                      <div class="col-md-4">

                        <h4><small><a href="create-new-data-ruangan.php?id=<?php echo $data1['id_keadaan']; ?>"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemakaian Ruangan</a></small><h4>
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
                        <?php

                        $dt2 = mysqli_query($conn, "SELECT * FROM identitas_pasien ip 
                          JOIN keadaan_pasien kp ON (ip.no_rm = kp.no_rm) 
                          JOIN pemakaian_ruangan pr ON (pr.id_keadaan = kp.id_keadaan)
                          JOIN dokter d ON (pr.id_dokter = d.id_dokter) 
                          JOIN ruangan r ON (pr.kode_ruangan = r.kode_ruangan) WHERE ip.no_rm =$norm ORDER BY pr.tanggal_masuk_ruangan DESC");

                        while($data2 = mysqli_fetch_array($dt2)){

                        ?>
                        <tr>
                          <td><?php echo $data2['nama_ruangan']; ?></td>
                          <td><?php echo $data2['tanggal_masuk_ruangan']; ?></td>
                          <td><?php echo $data2['jam_masuk']; ?></td>
                          <td><?php echo $data2['tanggal_keluar_ruangan']; ?></td>
                          <td><?php echo $data2['jam_keluar']; ?></td>
                          <td><?php echo $data2['nama_dokter']; ?></td>
                          <td style="text-align: center;"><a href="update-data-ruangan.php?id=<?php echo $data2['id_pemakaian_ruangan']; ?>"><i class="fa fa-pencil margin-r-5"></i></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <!-- <hr> -->
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <?php } ?>
                  
                </div>
                <!-- /.End Informasi Keadaan -->


                <div class="tab-pane" id="timeline">
                  <!-- Start Informasi Pemasangan -->
                  <?php

                  // $data3 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM surv_iadp WHERE id_keadaan = $data[id_keadaan]"));

                  // while($data3 = mysqli_fetch_array($query)){

                  ?>
                  

                  <div id="konten-surveilans">
                  </div>

                  <hr>
                </div>
                <!-- /.End Informasi Pemasangan -->

                <div class="tab-pane" id="settings">
                  <!-- Start Edit Informasi -->
                  <form class="form-horizontal" role="form" method="post" action="process/edit-data-pasien.php" align="">
                    <input type="hidden" value="edit" name="type">
                    <div class="form-group">
                      <label for="inputNoRM" class="col-sm-2 control-label">No.RM</label>
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" name="oldnorm" value="<?php echo $data['no_rm']; ?>">
                        <input type="text" class="form-control" name="newnorm" value="<?php echo $data['no_rm']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_pasien']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputGender" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-3">
                            <label class="radio-inline">
                              <input type="radio" name="gender" id="femaleRadio" value="Perempuan" <?php if($data['jenis_kelamin'] == "Perempuan"){echo "checked";} ?>>Perempuan
                            </label>
                          </div>
                          <div class="col-sm-3">
                            <label class="radio-inline">
                              <input type="radio" name="gender" id="maleRadio" value="Laki-Laki" <?php if($data['jenis_kelamin'] == "Laki-laki"){echo "checked";} ?>>Laki-Laki
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputTanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <input type="date" name="birthDate" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" required><?php echo $data['alamat']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                      <div class="col-sm-2">
                        <a href="process/delete-pasien.php?id=<?php echo $data['no_rm']; ?>" class="btn btn-block btn-danger"><div onclick="return konfirmasi_hapus()" >Hapus Pasien</div></a>
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

<!-- JS -->
<script src="js/js.js"></script>
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
  $(document).ready(function(){
      $("#konten-surveilans").load("content/read-riwayat-<?php echo $surveilans; ?>.php?id=<?php echo $data['id_pemakaian_ruangan']; ?>");
  });

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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience. -->

</body>
</html>