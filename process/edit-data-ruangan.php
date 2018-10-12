<?php
include('../connect/connect.php');
$id_pmk_ruang = $_POST['id_pmk_ruang'];
$ruangan = $_POST['ruangan'];
$inDate = $_POST['inDate'];
$inTime = $_POST['inTime'];
$outDate = $_POST['outDate'];
$outTime = $_POST['outTime'];
$dokter = $_POST['dokter'];

mysqli_begin_transaction($conn);
		
$sql = mysqli_query($conn, "UPDATE pemakaian_ruangan SET kode_ruangan = '$ruangan', tanggal_masuk_ruangan = '$inDate', jam_masuk = '$inTime', tanggal_keluar_ruangan = '$outDate', jam_keluar = '$outTime', id_dokter = '$dokter' WHERE id_pemakaian_ruangan = $id_pmk_ruang");

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM pemakaian_ruangan WHERE id_pemakaian_ruangan = $id_pmk_ruang) LIMIT 1"));

	echo "<script>alert('Data berhasil diubah!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal diubah.".mysqli_error ($conn)."');
	window.location.href='../update-data-ruangan.php?id=$id_pmk_ruang' </script>";

}

mysqli_close();

?>