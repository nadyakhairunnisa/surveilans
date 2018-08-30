<?php
include('../connect/connect.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];


mysqli_begin_transaction($conn);		

$sql = mysqli_query($conn, "UPDATE dokter SET nama_dokter = '$nama', id_spesialis = '$spesialis' WHERE id_dokter = '$id'");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil diubah!');
	window.location.href='../data-dokter.php' </script>";
} else {
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal diubah.');
	window.location.href='../data-dokter.php' </script>";

}

mysqli_close();

?>