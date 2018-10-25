<?php
include('../connect/connect.php');
$id_keadaan = $_POST['id_keadaan'];
$ruangan = $_POST['ruangan'];
$inDate = $_POST['inDate'];
$inTime = $_POST['inTime'];
$outDate = $_POST['outDate'];
$outTime = $_POST['outTime'];
$dokter = $_POST['dokter'];

//Pengecekan tanggal
$tanggal_masuk = date_create($inDate);
$tanggal_keluar = date_create($outDate);
$today = date_create();


mysqli_begin_transaction($conn);

$cek = mysqli_fetch_array(mysqli_query($conn, "SELECT tanggal_keluar_rs FROM keadaan_pasien WHERE id_keadaan = $id_keadaan LIMIT 1"));

$cek_keluar = $cek['tanggal_keluar_rs'];

$tanggal_keluar_rs = date_create($cek['tanggal_keluar_rs']);

if($tanggal_masuk <= $today && $tanggal_keluar <= $today){
	if($tanggal_masuk <= $tanggal_keluar){

		if($cek_keluar != "0000-00-00"){
			if($tanggal_keluar > $tanggal_keluar_rs){
				echo "<script>alert('Data gagal disimpan. Note: Tanggal Keluar Ruangan melewati Tanggal Keluar RS.');
				window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";
			}
		}

		// if($tanggal_keluar <= $tanggal_keluar_rs){
			$sql = mysqli_query($conn, "INSERT INTO pemakaian_ruangan (id_keadaan, kode_ruangan, tanggal_masuk_ruangan, jam_masuk, tanggal_keluar_ruangan, jam_keluar, id_dokter) values ('$id_keadaan', '$ruangan', '$inDate', '$inTime', '$outDate', '$outTime', '$dokter')");

			if($sql) {
				mysqli_commit($conn);

				$id = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(id_pemakaian_ruangan) FROM pemakaian_ruangan"));

				echo "<script>alert('Data berhasil disimpan!');
				window.location.href='../create-pasien-data-pemasangan.php?id=".$id['MAX(id_pemakaian_ruangan)']."' </script>";
			} else {
				echo mysqli_error ($conn );
				die;
				mysqli_rollback($conn);
				echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
				window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";
			}

		// } else {
		// 	echo "<script>alert('Data gagal disimpan. Note: Tanggal Keluar Ruangan melewati Tanggal Keluar RS.');
		// 	window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";
		// }

	} else {
		echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk melewati Tanggal Keluar.');
		window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";
	}

} else {
	echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk/Keluar melewati Tanggal Hari Ini.');
	window.location.href='../create-pasien-data-ruangan.php?id=$id_keadaan' </script>";
}

mysqli_close();

?>