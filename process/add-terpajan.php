<?php
include('../connect/connect.php');
$lapDate = $_POST['lapDate'];
$lapTime = $_POST['lapTime'];
$pjnDate = $_POST['pjnDate'];
$pjnTime = $_POST['pjnTime'];
$ruangan = $_POST['ruangan'];
$unit = $_POST['unit'];
$namaPj = $_POST['namaPj'];
$alamatPj = $_POST['alamatPj'];
$namaAts = $_POST['namaAts'];
$alamatAts = $_POST['alamatAts'];
$rute = $_POST['rute'];
$sumberpjn = $_POST['sumberpjn'];
$sumberpjnlain = $_POST['sumberpjnlain'];
$sumberps = $_POST['sumberps'];
$sumberpslain = $_POST['sumberpslain'];
$bagTbh = $_POST['bagTbh'];
$keterangan = $_POST['keterangan'];
$imunhpt = $_POST['imunhpt'];
$alat = $_POST['alat'];
$jenis = $_POST['jenis'];
$pp = $_POST['pp'];

mysqli_begin_transaction($conn);

		// echo "$new_id";
		// die;
		
$sql = mysqli_query($conn, "INSERT INTO surv_terpajan (tanggal_laporan, jam_laporan, tanggal_pajanan, jam_pajanan, kode_ruangan, unit_kerja, nama_terpajan, alamat_terpajan, nama_atasan, alamat_atasan, rute_pajanan, sumber_pajanan, sumber_pajanan_lain, sumber_pasien, sumber_pasien_lain, bagian_tubuh_terpajan, urutan_kejadian, imunisasi_hepatitis, alat_pelindung, jenis_alat, pertolongan_pertama) values ('$lapDate', '$lapTime', '$pjnDate', '$pjnTime', '$ruangan', '$unit', '$namaPj', '$alamatPj', '$namaAts', '$alamatAts', '$rute', '$sumberpjn', '$sumberpjnlain', '$sumberps', '$sumberpslain', '$bagTbh', '$keterangan', '$imunhpt', '$alat', '$jenis', '$pp')");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../data-terpajan.php' </script>";
} else {
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.');
	window.location.href='../create-terpajan.php' </script>";

}

mysqli_close();

?>