<?php
include('../connect/connect.php');
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$norm = $_POST['norm'];
$alamat = $_POST['alamat'];
$birthDate = $_POST['birthDate'];

$tanggal_lahir = date_create($birthDate);
$today = date_create();

$interval = date_diff($tanggal_lahir, $today);

$usia = ($interval->y);

if($usia == 0){
	if($interval->days <= 28){
		$kategori_usia = "Neonatal";
	} else {
		$kategori_usia = "Bayi";
	}
} else if($usia >= 1 && $usia <= 5){
	$kategori_usia = "Balita";
} else if($usia >= 6 && $usia <= 14){
	$kategori_usia = "Anak-Anak";
} else if($usia >= 15 && $usia <= 55){
	$kategori_usia = "Dewasa";
} else if($usia >= 56) {
	$kategori_usia = "Lansia";
} else {
	$kategori_usia = "Undefined";
}

mysqli_begin_transaction($conn);

$cari = 0;

$query = mysqli_query($conn, "SELECT no_rm FROM identitas_pasien");
while($data = mysqli_fetch_array($query)){
	$cari_norm = $data['no_rm'];
	if($cari_norm == $norm){
		$cari = 1;
	}
}

if($tanggal_lahir <= $today){

	if($cari == 1){

		$sql = mysqli_query($conn, "UPDATE identitas_pasien SET nama_pasien = '$nama', jenis_kelamin = '$gender', tanggal_lahir = '$birthDate', usia = '$usia', kategori_usia = '$kategori_usia', alamat = '$alamat' WHERE no_rm = '$norm'");
		if($sql) {
			mysqli_commit($conn);
			echo "<script>alert('Data berhasil disimpan!');
			window.location.href='../create-pasien-data-keadaan.php?id=$norm' </script>";
		} else {
		// echo mysqli_error ($conn );
		// die;
			mysqli_rollback($conn);
			echo "<script>alert('Data gagal disimpan.');
			window.location.href='../create-pasien-data.php' </script>";
		}

	} else {

		$sql = mysqli_query($conn, "INSERT INTO identitas_pasien (no_rm, nama_pasien, jenis_kelamin, tanggal_lahir, usia, kategori_usia, alamat) values ('$norm', '$nama', '$gender', '$birthDate', '$usia', '$kategori_usia', '$alamat')");

		if($sql) {
			mysqli_commit($conn);
			echo "<script>alert('Data berhasil disimpan!');
			window.location.href='../create-pasien-data-keadaan.php?id=$norm' </script>";
		} else {
		// echo mysqli_error ($conn );
		// die;
			mysqli_rollback($conn);
			echo "<script>alert('Data gagal disimpan.');
			window.location.href='../create-pasien-data.php' </script>";
		}

	}
	
} else {
	echo "<script>alert('Data gagal disimpan. Note: Tanggal Lahir tidak sesuai.');
	window.location.href='../create-pasien-data.php' </script>";
}


mysqli_close($conn);

?>