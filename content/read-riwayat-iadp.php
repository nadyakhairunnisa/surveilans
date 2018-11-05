<?php 

include("../connect/connect.php");
$id=$_GET['id'];
$query = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM surv_iadp WHERE id_pemakaian_ruangan = $id LIMIT 1"));

// while($row = mysqli_fetch_array($query)){

?>

<br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Pemasangan : </strong><?php echo $query['jenis_invasif'] ?><br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Jenis Surveilans : </strong>IADP<br><br>
<strong><i class="fa fa-medkit margin-r-5"></i> Tujuan Pemasangan : </strong><?php echo $query['tujuan_pemasangan'] ?><br><br>

<div class="row">
  <div class="col-md-4">
    <h4 style="color: #689999;"><strong>Riwayat Pemasangan</strong></h4>
  </div>

  <?php if($row['tanggal_keluar'] == "0000-00-00") ?>

  <div class="col-md-4">
    <h4><small><a href="create-surveilans-iadp.php?id=<?php echo $row['id_surv']; ?>"><i class="fa fa-plus-circle margin-r-5"></i>Tambah Pemasangan</a></small><h4>
  </div>

</div><br>

<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Ruangan</th>
      <th>Lokasi Pasang</th>
      <th>Tanggal Pasang</th>
      <th>Tanggal Lepas</th>
      <th>Total Hari</th>
      <th>Tanda-Tanda Infeksi</th>
      <th>Tanggal Infeksi</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php 

    $query2 = mysqli_query($conn, "SELECT * FROM surv_gejala_iadp WHERE id_surv = $row[id_surv]");
    while($row2 = mysqli_fetch_array($query2)){

    ?>
    <tr>
      <td><?php echo $row2['lokasi_pasang']; ?></td>
      <td><?php echo $row2['tanggal_pasang']; ?></td>
      <td><?php echo $row2['tanggal_lepas']; ?></td>
      <td><?php echo $row2['total_hari']; ?></td>
      <td><?php echo $row2['tanda_infeksi']; ?></td>
      <td><?php echo $row2['tanggal_infeksi']; ?></td>
      <td style="text-align: center;"><a href="update-surveilans-iadp.php?id=<?php echo $row2['id_surv_gejala'] ?>"><i class="fa fa-pencil margin-r-5"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php } ?>