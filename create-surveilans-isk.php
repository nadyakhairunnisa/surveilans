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
              <li class="active"><a href="data-pasien.php"><i class="fa fa-circle-o"></i>Pasien</a></li>
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
          TAMBAH DATA
          <small>Surveilans ISK</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-plus-circle"></i>Tambah Data</a></li>
          <li class="active">Surveilans</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
          <div class="box-body">

            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="pasangDate" class="col-sm-2 control-label">Tanggal Pasang</label>
                <div class="col-sm-9">
                  <input type="date" id="pasangDate" class="form-control">
                </div>
              </div>

              <!-- BUNDLES START -->

              <div class="form-group">
                <label class="control-label col-sm-2">Pemasangan DC Sesuai Indikasi</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>    
                <label class="control-label col-sm-2">Pemasangan Menggunakan Alat Steril</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <label class="control-label col-sm-2">Melakukan Hand Hygiene</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <label class="control-label col-sm-2">Segera Dilepas Jika Tidak Indikasi</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->

              <div class="form-group">
                <label class="control-label col-sm-2">Fiksasi Kateter dengan Plester</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <label class="control-label col-sm-2">Pengisian Balon sesuai Indikasi (30mL)</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->
              <div class="form-group">
                <label class="control-label col-sm-2">ADP Tepat</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
                <label class="control-label col-sm-2">Urine Bag Menggantung</label>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="obat" value="Pemberian Obat">Ya
                      </label>
                    </div>
                    <div class="col-sm-4">
                      <label class="radio-inline">
                        <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Tidak
                      </label>
                    </div>
                  </div>
                </div>
              </div> <!-- /.form-group -->

              <!-- /.END-BUNDLES -->

              <div class="form-group">
                <label for="lepasDate" class="col-sm-2 control-label">Tanggal Lepas</label>
                <div class="col-sm-9">
                  <input type="date" id="lepasDate" class="form-control">
                </div>
              </div>

              <div class="form-group">
                <label for="country" class="col-sm-2 control-label">Terdapat Tanda Infeksi</label>
                <div class="col-sm-9">
                  <select id="tanda" class="form-control select2">
                    <option value="" selected disabled>Apakah terdapat tanda infeksi?</option>
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                  </select>
                </div>
              </div>
              <!-- /.form-group -->

              <div id="form-gejala"></div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-3 col-md-offset-3">
                    <!-- <button type="submit" class="btn btn-primary btn-block">Register</button> -->
                    <a onclick="prevStep()" class="btn btn-danger btn-block" href="create-pasien-data-ruangan.php">Sebelumnya</a>
                  </div>
                  <div class="col-sm-3">
                    <!-- <button type="submit" class="btn btn-primary btn-block">Register</button> -->
                    <a class="btn btn-primary btn-block" href="riwayat-pasien.php">Submit</a>
                  </div>
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
    $('.select2').select2();

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

    var cache = {};
    var tandaLama = $("#tanda").val();
    $("#tanda").change(function(){
      var input = $(this);

      var tandaBaru = input.val();

      var form = $("#form-gejala");
      cache[tandaLama] = form.clone();

      if (cache[tandaBaru]) {
        form.replaceWith(cache[tandaBaru]);
      } else {
        form.load("content/form-gejala-isk-"+tandaBaru+".php");
      }
      tandaLama = tandaBaru;
    });
  })
</script>
</body>
</html>
