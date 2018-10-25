<?php 

include("../connect/connect.php");
$id=$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM surv_ido WHERE id_pemakaian_ruangan = $id");

$row = mysqli_fetch_array($query); ?>

<br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemasangan : </strong><?php echo $row['jenis_invasif'] ?><br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Surveilans : </strong>IDO<br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Bundles Kepatuhan </strong><a data-toggle='modal' data-target='#editModal-bundles' style='cursor:pointer;'>Lihat Bundles</a><br><br>

<div class="row">
  <div class="col-md-4">
    <h4 style="color: #689999;"><strong>Riwayat Pemasangan</strong></h4>
  </div>
  <div class="col-md-4">
    <h4>
      <small><a href="create-surveilans-ido.php?id=<?php echo $row['id_surv']; ?>"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemasangan</a></small>
    <h4>
  </div>
</div><br>

<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Tanggal Kejadian</th>
      <th>Tanda-Tanda Infeksi</th>
      <th>Keterangan Infeksi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $query2 = mysqli_query($conn, "SELECT * FROM surv_gejala_ido WHERE id_surv = $row[id_surv] ORDER BY tanggal_kejadian DESC");
    while($row2 = mysqli_fetch_array($query2)) { ?>
    <tr>
      <td><?php echo $row2['tanggal_kejadian']; ?></td>
      <td><?php echo $row2['tanda_infeksi']; ?></td>
      <td><?php echo $row2['keterangan_infeksi']; ?></td>
      <td style="text-align: center;"><a href="update-surveilans-ido.php?id=<?php echo $row2['id_surv_gejala'] ?>"><i class="fa fa-pencil margin-r-5"></i></a></td>
    </tr>

    <!-- MODAL -->
    
    <?php } ?>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="editModal-bundles" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bundles Kepatuhan Operasi</h4>
      </div>
      <div class="modal-body">

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Tidak Mencukur Rambut (Kecuali Mengganggu Jalannya Operasi)</th>
              <th>Melakukan Pencukuran 1 Jam Sebelum Operasi Menggunakan Clipper</th>
              <th>Suhu Tubuh Pasien Normal (36-37C))</th>
              <th>Pemberian Antibiotik Profilaksis</th>
              <th>Kontrol Gula Darah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row['bundles_tidak_mencukur']; ?></td>
              <td><?php echo $row['bundles_cukur']; ?></td>
              <td><?php echo $row['bundles_suhu']; ?></td>
              <td><?php echo $row['bundles_antibiotik']; ?></td>
              <td><?php echo $row['bundles_kontrol_guladarah']; ?></td>
            </tr>
          </tbody>
        </table>

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

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>