<?php
include("connect/connect.php");
$id=$_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM kejadian_terpajan WHERE id_kejadian_terpajan=$id LIMIT 1"));
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
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
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
          <li class="active treeview">
            <a href="#"><i class="fa fa-plus-circle"></i> <span>Tambah Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="create-pasien-data.php"><i class="fa fa-plus"></i>Pasien</a></li>
              <li class="active"><a href="#"><i class="fa fa-plus"></i>Perawat</a></li>
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
      <section class="content-header">
        <h1>
          TAMBAH DATA
          <small>Laporan Perawat Terpajan</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-plus-circle"></i>Tambah Data</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content"><br>

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
          <div class="box-body"><br>

            <form class="form-horizontal" role="form" method="post" action="process/edit-terpajan.php" align="">
              <input type="hidden" value="<?php echo $id ?>" name="id">
              <div class="form-group">
                <label for="birthDate" class="col-sm-2 control-label">Tanggal Laporan</label>
                <div class="col-sm-3">
                  <input type="date" name="lapDate" class="form-control" value="<?php echo $data['tanggal_laporan']; ?>">
                </div>
                <label for="inTime" class="col-sm-1 control-label">Jam</label>
                <div class="col-sm-2">
                  <input type="time" name="lapTime" class="form-control" value="<?php echo $data['jam_laporan']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="birthDate" class="col-sm-2 control-label">Tanggal Pajanan</label>
                <div class="col-sm-3">
                  <input type="date" name="pjnDate" class="form-control" value="<?php echo $data['tanggal_pajanan']; ?>">
                </div>
                <label for="inTime" class="col-sm-1 control-label">Jam</label>
                <div class="col-sm-2">
                  <input type="time" name="pjnTime" class="form-control" value="<?php echo $data['jam_pajanan']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="country" class="col-sm-2 control-label">Tempat Kejadian</label>
                <div class="col-sm-6">
                  <select name="ruangan" class="form-control select2" style="width: 100%;">
                    <option value="" selected disabled>Pilih Ruang Kejadian</option>

                    <?php 
                    $query = mysqli_query($conn, "SELECT * FROM ruangan");
                    while($dt = mysqli_fetch_assoc($query)) {
                      $id_r = $dt['kode_ruangan'];
                      $nama_r = $dt['nama_ruangan'];
                      if($id_r == $data['kode_ruangan']){
                        echo "<option value='$id_r' selected>$nama_r</option>";
                      } else {
                        echo "<option value='$id_r'>$nama_r</option>"; 
                      }
                    }
                    ?>

                  </select>
                </div>
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Unit Kerja Terpajan</label>
                <div class="col-sm-6">
                  <input type="text" name="unit" class="form-control" value="<?php echo $data['unit_kerja']; ?>">
                </div>                
              </div>
              <div class="box-header with-border"></div><br>
              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Nama Terpajan</label>
                <div class="col-sm-3">
                  <input type="text" name="namaPj" class="form-control" value="<?php echo $data['nama_terpajan']; ?>">
                </div>
                <label for="firstName" class="col-sm-1 control-label">Alamat</label>
                <div class="col-sm-5">
                  <input type="text" name="alamatPj" class="form-control" value="<?php echo $data['alamat_terpajan']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Atasan Langsung</label>
                <div class="col-sm-3">
                  <input type="text" name="namaAts" class="form-control" value="<?php echo $data['nama_atasan']; ?>">
                </div>
                <label for="firstName" class="col-sm-1 control-label">Alamat</label>
                <div class="col-sm-5">
                  <input type="text" name="alamatAts" class="form-control" value="<?php echo $data['alamat_atasan']; ?>">
                </div>
              </div>
              <div class="box-header with-border"></div><br>
              <div class="form-group">
                <label class="control-label col-sm-2">Rute Pajanan</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="femaleRadio" value="Kateter IV" <?php if($data['rute_pajanan'] == "Kateter IV"){echo "checked";} ?>>Kateter IV
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="maleRadio" value="Kateter Urine" <?php if($data['rute_pajanan'] == "Kateter Urine"){echo "checked";} ?>>Kateter Urine
                      </label>
                    </div>
                    <div class="col-sm-5">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="femaleRadio" value="Tusukan Jarum Suntik" <?php if($data['rute_pajanan'] == "Tusukan Jarum Suntik"){echo "checked";} ?>>Tusukan Jarum Suntik
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="maleRadio" value="Gigitan" value="Gigitan" <?php if($data['rute_pajanan'] == "Gigitan"){echo "checked";} ?>>Gigitan
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="femaleRadio" value="Mulut" <?php if($data['rute_pajanan'] == "Mulut"){echo "checked";} ?>>Mulut
                      </label>
                    </div>
                    <div class="col-sm-5">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="maleRadio" value="Luka Pada Kulit" <?php if($data['rute_pajanan'] == "Luka Pada Kulit"){echo "checked";} ?>>Luka Pada Kulit
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="femaleRadio" value="Mata" <?php if($data['rute_pajanan'] == "Mata"){echo "checked";} ?>>Mata
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="rute" id="maleRadio" value="Lain-Lain" <?php if($data['rute_pajanan'] == "Lain-Lain"){echo "checked";} ?>>Lain-Lain
                      </label>
                    </div>
                  </div>
                </div>
              </div><br> <!-- /.form-group -->
              <div class="form-group">
                <label class="control-label col-sm-2">Sumber Pajanan</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberpjn" id="femaleRadio" value="Darah" <?php if($data['sumber_pajanan'] == "Darah"){echo "checked";} ?>>Darah
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberpjn" id="maleRadio" value="Sputum" <?php if($data['sumber_pajanan'] == "Sputum"){echo "checked";} ?>>Sputum
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberpjn" id="femaleRadio" value="Air Liur" <?php if($data['sumber_pajanan'] == "Air Liur"){echo "checked";} ?>>Air Liur
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberpjn" id="femaleRadio" value="Feses" <?php if($data['sumber_pajanan'] == "Feses"){echo "checked";} ?>>Feses
                      </label>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberpjn" id="femaleRadio" value="Lain-Lain" <?php if($data['sumber_pajanan'] == "Lain-Lain"){echo "checked";} ?>>Lain-Lain
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="sumberpjnlain" value="<?php echo $data['sumber_pajanan_lain'] ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div><br> <!-- /.form-group -->
              <div class="form-group">
                <label class="control-label col-sm-2">Sumber Pasien Pajanan</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberps" id="femaleRadio" value="HIV - AIDS" <?php if($data['sumber_pasien'] == "HIV - AIDS"){echo "checked";} ?>>HIV - AIDS
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberps" id="maleRadio" value="Hepatitis A/B/C" <?php if($data['sumber_pasien'] == "Hepatitis A/B/C"){echo "checked";} ?>>Hepatitis A/B/C
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="sumberps" id="femaleRadio" value="Lain-Lain" <?php if($data['sumber_pasien'] == "Lain-Lain"){echo "checked";} ?>>Lain-Lain
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <input type="text" name="sumberpslain" class="form-control" value="<?php echo $data['sumber_pasien_lain'] ?>">
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Bagian Tubuh Terpajan</label>
                <div class="col-sm-9">
                  <input type="text" name="bagTbh" class="form-control" value="<?php echo $data['bagian_tubuh_terpajan']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Urutan Kejadian</label>
                <div class="col-sm-9">
                  <textarea placeholder="Jelaskan ..." rows="3" class="form-control" type="text" name="keterangan"><?php echo $data['urutan_kejadian']; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Imunisasi Hepatitis</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="imunhpt" id="femaleRadio" value="Sudah" <?php if($data['imunisasi_hepatitis'] == "Sudah"){echo "checked";} ?>>Sudah
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="imunhpt" id="maleRadio" value="Belum" <?php if($data['imunisasi_hepatitis'] == "Belum"){echo "checked";} ?>>Belum
                      </label>
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label class="control-label col-sm-2">Alat Pelindung</label>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="alat" id="femaleRadio" value="Dipakai" <?php if($data['alat_pelindung'] == "Dipakai"){echo "checked";} ?>>Dipakai
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-inline">
                        <input type="radio" name="alat" id="maleRadio" value="Tidak" <?php if($data['alat_pelindung'] == "Tidak"){echo "checked";} ?>>Tidak
                      </label>
                    </div>
                    <div class="col-sm-5">
                      <input type="text" name="jenis" class="form-control" value="<?php echo $data['jenis_alat']; ?>">
                    </div>
                  </div>
                </div>
              </div><br> <!-- /.form-group -->
              <div class="form-group">
                <label for="firstName" class="col-sm-2 control-label">Pertolongan Pertama</label>
                <div class="col-sm-9">
                  <input type="text" name="pp" class="form-control" value="<?php echo $data['pertolongan_pertama']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-9 col-sm-offset-2">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  <!-- <a class="btn btn-primary btn-block" href="data-terpajan.php">Submit</a> -->
                </div>
              </div>

            </form> <!-- /form -->

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

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Multiple Step Form -->
  <script src="js/multiple-step-form.js"></script>
  <!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page script -->
  <script>
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
