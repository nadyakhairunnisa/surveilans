<?php 

include("../connect/connect.php");
$id=$_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM surv_isk WHERE id_keadaan = $id");

$row = mysqli_fetch_array($query); ?>

<br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemasangan : </strong><?php echo $row['jenis_invasif'] ?><br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Surveilans : </strong>ISK<br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemeriksaan : </strong><?php echo $row['jenis_pemeriksaan'] ?><br><br>

<div class="row">
  <div class="col-md-4">
    <h4 style="color: #689999;"><strong>Riwayat Pemasangan</strong></h4>
  </div>
  <div class="col-md-4">
    <h4>
      <small><a href="create-surveilans-isk.php?id=<?php echo $row['id_surv']; ?>"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemasangan</a></small>
    <h4>
  </div>
</div><br>

<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Tanggal Pasang</th>
      <th>Tanggal Lepas</th>
      <th>Total Hari</th>
      <th>Tanda-Tanda Infeksi</th>
      <th>Tanggal Infeksi</th>
      <th>Bundles Kepatuhan</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $query2 = mysqli_query($conn, "SELECT * FROM surv_gejala_isk WHERE id_surv = $row[id_surv] ORDER BY tanggal_pasang DESC");
    foreach ($query2 as $index => $row2) { ?>
    <tr>
      <td><?php echo $row2['tanggal_pasang']; ?></td>
      <td><?php echo $row2['tanggal_pasang']; ?></td>
      <td><?php echo $row2['total_hari']; ?></td>
      <td><?php echo $row2['tanda_infeksi']; ?></td>
      <td><?php echo $row2['tanggal_infeksi']; ?></td>
      <td style="text-align: center;"><a data-toggle='modal' data-target='#editModal-<?php echo $index; ?>' style='cursor:pointer;'>Lihat Bundles</a>                
      </td>
      <td style="text-align: center;"><a href="update-surveilans-isk.php?id=<?php echo $row2['id_surv_gejala'] ?>"><i class="fa fa-pencil margin-r-5"></i></a></td>
    </tr>

    <!-- MODAL -->
    
    <?php } ?>
  </tbody>
</table>

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