<?php
include('../connect/connect.php');
$id = $_POST['id'];
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
		
$sql = mysqli_query($conn, "UPDATE surv_terpajan SET tanggal_laporan = '$lapDate', jam_laporan = '$lapTime', tanggal_pajanan = '$pjnDate', jam_pajanan = '$pjnTime', kode_ruangan = '$ruangan', unit_kerja = '$unit', nama_terpajan = '$namaPj', alamat_terpajan = '$alamatPj', nama_atasan = '$namaAts', alamat_atasan = '$alamatAts', rute_pajanan = '$rute', sumber_pajanan = '$sumberpjn', sumber_pajanan_lain = '$sumberpjnlain', sumber_pasien = '$sumberps', sumber_pasien_lain = '$sumberpslain', bagian_tubuh_terpajan = '$bagTbh', urutan_kejadian = '$keterangan', imunisasi_hepatitis = '$imunhpt', alat_pelindung = '$alat', jenis_alat = '$jenis', pertolongan_pertama = '$pp' WHERE id_kejadian_terpajan = '$id'");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../data-terpajan.php' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.');
	window.location.href='../data-terpajan.php' </script>";

}

mysqli_close();

?>