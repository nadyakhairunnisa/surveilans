<?php
include("connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>SURVEILANS PPI | RSUI Harapan Anda</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="css/style.css" rel="stylesheet"> -->

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
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
              <li><a href="data-pasien.php"><i class="fa fa-circle-o" aria-hidden="true"></i>Pasien</a></li>
              <li><a href="data-terpajan.php"><i class="fa fa-circle-o" aria-hidden="true"></i>Perawat</a></li>
              <li class="active"><a href="#"><i class="fa fa-circle-o" aria-hidden="true"></i>Dokter</a></li>
              <li><a href="data-ruangan.php"><i class="fa fa-circle-o" aria-hidden="true"></i>Ruangan</a></li>
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
          KELOLA DOKTER
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Surveilans</a></li>
          <li class="active">Data Pasien</li>
          <li>Riwayat Pasien</li>
        </ol>
      </section>

      <!-- MAIN CONTENT (ISI HALAMAN MULAI) -->
      <section class="content container-fluid">

        <div class="box box-default">
          <div class="box-body">

            <form class="form-horizontal" role="form" method="post" action="process/add-dokter.php" align="">

              <div class="box-header">
                <h3 class="box-title" style="text-decoration:underline;">Tambah Dokter</h3>          
              </div>
              <!-- /.box-header -->

              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-5">
                  <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required autofocus>
                </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label for="country" class="col-sm-2 control-label">Jenis Spesialis</label>
                <div class="col-sm-5">
                  <select name="spesialis" class="form-control select2" style="width: 100%;" required>
                    <option value="" selected disabled>Pilih Jenis Spesialis</option>
                    <?php 
                    $query = mysqli_query($conn, "SELECT * FROM spesialis");
                    while($data = mysqli_fetch_assoc($query)) {
                      $sid = $data['id_spesialis'];
                      $nama_s = $data['nama_spesialis'];
                      echo "<option value='$sid'>$nama_s</option>"; }
                    ?>
                  </select>
                </div>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <div class="col-sm-2 col-sm-offset-3">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  <!-- <a class="btn btn-primary btn-block" href="data-dokter.php">Submit</a> -->
                </div>
              </div>

            </form> <!-- /form -->

          </div>
          <!-- /.box-body -->

          <div class="box-body" style="width: 80%; background-color:transparent;">
            <div class="box-header">
              <h3 class="box-title" style="text-decoration:underline;">Tabel Dokter</h3>
            </div>
            <div class="box-header">
              <table id="example1" class="table table-bordered table-striped" style="border-color:#dbdbdb">
                <thead>
                  <tr>
                    <th>Nama Dokter</th>
                    <th>Jenis Spesialis</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                $result = mysqli_query($conn, "SELECT d.id_dokter, d.nama_dokter, d.id_spesialis, s.nama_spesialis FROM dokter d JOIN spesialis s ON d.id_spesialis=s.id_spesialis");
                foreach ($result as $index => $row) { ?>

                <tr>
                  <td><?php echo $row['nama_dokter']; ?></td>
                  <td><?php echo $row['nama_spesialis']; ?></td>
                  <td style='font-size:20px'>
                    <div class='col-sm-2'><a data-toggle='modal' data-target='#editModal-<?php echo $index; ?>' style='cursor:pointer;'><i class='fa fa-pencil'></i></a></div>
                    <div class='col-sm-1'><a href='process/delete-dokter.php?id=<?php echo $row['id_dokter']; ?>'><div onclick="return konfirmasi_hapus()" ><i class='fa fa-trash-o'></i></div></a></div>                     
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="editModal-<?php echo $index; ?>" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Dokter</h4>
                      </div>
                      <div class="modal-body">
                      
                        <form class="form-horizontal" role="form" method="post" action="process/edit-dokter.php" align="">
                          <input type="hidden" value="<?php echo $row['id_dokter']; ?>" name="id">
                          <div class="form-group">
                            <label for="firstName" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-5">
                              <input type="text" name="nama" value="<?php echo $row['nama_dokter']; ?>" class="form-control" autofocus>
                            </div>
                          </div><br><br>
                          <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Jenis Spesialis</label>
                            <div class="col-sm-5">
                              <select name="spesialis" class="form-control select2" style="width: 100%;">
                                <option value="" disabled>Pilih Jenis Spesialis</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM spesialis");
                                while($data = mysqli_fetch_assoc($query)) {
                                  $s_id = $data['id_spesialis'];
                                  $s_nama = $data['nama_spesialis'];
                                  if($s_id == $row['id_spesialis']){
                                    echo "<option value='$s_id' selected>$s_nama</option>";
                                  } else {
                                    echo "<option value='$s_id'>$s_nama</option>";
                                  }}
                                ?>
                              </select>
                            </div>
                          </div> <!-- /.form-group --><br><br>

                          <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                              <!-- <a class="btn btn-primary btn-block" href="process/update-dokter.php">Edit</a> -->
                            </div>
                          </div>
                        </form><br>
                        <!-- /form -->
                      </div>
                      <!-- /.Modal-body -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    <!-- /.Modal-content -->
                  </div>
                  <!-- /.Modal-dialog -->
                </div>
                <!-- /.Modal -->
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-header -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

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
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- SlimScroll -->
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
    //Initialize Select2 Elements
    $('.select2').select2()

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