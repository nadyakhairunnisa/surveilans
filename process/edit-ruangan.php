<?php
include('../connect/connect.php');
$id = $_POST['id'];
$nama = $_POST['nama'];


mysqli_begin_transaction($conn);		

$sql = mysqli_query($conn, "UPDATE ruangan SET nama_ruangan = '$nama' WHERE kode_ruangan = '$id'");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil diubah!');
	window.location.href='../data-ruangan.php' </script>";
} else {
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal diubah.');
	window.location.href='../data-ruangan.php' </script>";

}

mysqli_close();

?>