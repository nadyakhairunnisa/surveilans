<?php
	include('../connect/connect.php');
	$id = $_GET['id'];
	$norm = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM pemakaian_ruangan WHERE id_pemakaian_ruangan = '$id')"));

	mysqli_begin_transaction($conn);

	$sql = mysqli_query($conn, "DELETE FROM pemakaian_ruangan WHERE id_pemakaian_ruangan = '$id'");

	if($sql){
		mysqli_commit($conn);
		echo "<script>alert('Data berhasil dihapus!');
			window.location.href='../riwayat-pasien.php?id=".$norm['no_rm']."' </script>";
	} else {
		echo mysqli_error ($conn);
		die;
		mysqli_rollback($conn);
		echo "<script>alert('Data gagal dihapus.');
			window.location.href='../riwayat-pasien.php?id=".$norm['no_rm']."' </script>";
	}

	mysqli_close();
?>