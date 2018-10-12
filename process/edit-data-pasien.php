<?php
include('../connect/connect.php');
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$oldnorm = $_POST['oldnorm'];
$newnorm = $_POST['newnorm'];
$birthDate = $_POST['birthDate'];
$alamat = $_POST['alamat'];

$type = $_POST['type'];

mysqli_begin_transaction($conn);
		
$sql = mysqli_query($conn, "UPDATE identitas_pasien SET no_rm = '$newnorm', nama_pasien = '$nama', jenis_kelamin = '$gender', tanggal_lahir = '$birthDate', alamat = '$alamat' WHERE no_rm = '$oldnorm'");

if($sql) {
	mysqli_commit($conn);
	
	echo "<script>alert('Data berhasil diubah!');
	window.location.href='../riwayat-pasien.php?id=$newnorm' </script>";
} else {
	// echo mysqli_error ($conn );
	// die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal diubah.".mysqli_error ($conn)."');
	window.location.href='../riwayat-pasien.php?id=$oldnorm' </script>";

}

mysqli_close();

?>