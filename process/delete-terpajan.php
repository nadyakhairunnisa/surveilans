<?php
	include('../connect/connect.php');
	$id = $_GET['id'];

	mysqli_begin_transaction($conn);
	$sql = mysqli_query($conn, "DELETE FROM kejadian_terpajan WHERE id_kejadian = '$id'");

	if($sql){
		mysqli_commit($conn);
		echo "<script>alert('Data berhasil dihapus!');
			window.location.href='../data-terpajan.php' </script>";
	} else {
		mysqli_rollback($conn);
		echo "<script>alert('Data gagal dihapus.');
			window.location.href='../data-terpajan.php' </script>";
		// echo mysqli_error ($conn );
		// die;
	}

	mysqli_close();
?>