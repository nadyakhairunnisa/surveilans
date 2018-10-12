<?php 

include("../connect/connect.php");
$id=$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM surv_vap WHERE id_keadaan = $id");

$row = mysqli_fetch_array($query); ?>

<br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Surveilans : </strong>VAP<br><br>
<div class="row">
  <div class="col-md-4">
    <strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemasangan : </strong><?php echo $row['jenis_invasif'] ?><br><br>
    <strong><i class="fa fa-medkit margin-r-5"></i> Tanggal Pasang : </strong><?php echo $row['tanggal_pasang'] ?><br><br>
  </div>
  <div class="col-md-4">
    <strong><i class="fa fa-medkit margin-r-5"></i> No. Ventilator : </strong><?php echo $row['no_ventilator'] ?><br><br>
    <strong><i class="fa fa-medkit margin-r-5"></i> Tanggal Lepas : </strong><?php echo $row['tanggal_lepas'] ?><br><br>
  </div>
</div><hr>
<div class="row">
  <div class="col-md-4">
    <strong><i class="fa fa-medkit margin-r-5"></i> Bundles Kepatuhan : </strong><a data-toggle='modal' data-target='#editModal-bundles' style='cursor:pointer;'>Lihat Bundles</a><br><br>
    <strong><i class="fa fa-medkit margin-r-5"></i> Tanggal Infeksi : </strong><?php echo $row['tanggal_infeksi'] ?><br>
    </div>
    <div class="row">
    <div class="col-md-4">
    <strong></strong><br><br>
    <strong><i class="fa fa-medkit margin-r-5"></i> Tanda Infeksi : </strong><?php echo $row['tanda_infeksi'] ?><br>
    </div>
  </div>
</div><hr>
<strong><i class="fa fa-medkit margin-r-5"></i> Keterangan : </strong><?php echo $row['keterangan_infeksi'] ?><br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Foto Thorax : </strong><?php echo $row['foto_thorax'] ?><br><br>

<!-- Modal -->
<div class="modal fade" id="editModal-bundles" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bundles Kepatuhan Surveilans VAP</h4>
      </div>
      <div class="modal-body">

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Posisi Pasien 30-45 Derajat (Kecuali Kontra Indikasi)</th>
              <th>Lakukan Kebersihan Tangan Sebelum dan Sesudah Kontak Pasien</th>
              <th>Lakukan Kebersihan Mulut Setiap 4 Jam</th>
              <th>Manajemen Sekresi Oropharingeal dan Trakheal</th>
              <th>Pengkajian Setiap Hari "Sedasi dan Ekstubasi"</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row['bundles_posisi']; ?></td>
              <td><?php echo $row['bundles_kebersihan_tangan']; ?></td>
              <td><?php echo $row['bundles_kebersihan_mulut']; ?></td>
              <td><?php echo $row['bundles_manajemen_sekresi']; ?></td>
              <td><?php echo $row['bundles_pengkajian']; ?></td>
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