<?php
include('../connect/connect.php');
$id_keadaan = $_POST['id_keadaan'];
$ruangan = $_POST['ruangan'];
$inDate = $_POST['inDate'];
$inTime = $_POST['inTime'];
$outDate = $_POST['outDate'];
$outTime = $_POST['outTime'];
$dokter = $_POST['dokter'];

mysqli_begin_transaction($conn);
		
$sql = mysqli_query($conn, "INSERT INTO pemakaian_ruangan (id_keadaan, kode_ruangan, tanggal_masuk_ruangan, jam_masuk, tanggal_keluar_ruangan, jam_keluar, id_dokter) values ('$id_keadaan', '$ruangan', '$inDate', '$inTime', '$outDate', '$outTime', '$dokter')");

if($sql) {
	mysqli_commit($conn);

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../create-pasien-data-pemasangan.php?id=$id_keadaan' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";

}

mysqli_close();

?>