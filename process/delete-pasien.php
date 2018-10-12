<?php
	include('../connect/connect.php');
	$norm = $_GET['id'];

	mysqli_begin_transaction($conn);

	$sql = mysqli_query($conn, "DELETE FROM identitas_pasien WHERE no_rm = '$norm'");

	if($sql){
		mysqli_commit($conn);
		echo "<script>alert('Data berhasil dihapus!');
			window.location.href='../data-pasien.php' </script>";
	} else {
		echo mysqli_error ($conn);
		die;
		mysqli_rollback($conn);
		echo "<script>alert('Data gagal dihapus.');
			window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	}

	// $keadaan = mysqli_fetch_array(mysqli_query($conn, "SELECT id_keadaan FROM keadaan_pasien WHERE no_rm = $id"));
	// $surveilans = strtolower($keadaan['jenis_surveilans']);
	// $pasang = mysqli_fetch_array(mysqli_query($conn, "SELECT id_surv_$surveilans FROM surv_$surveilans WHERE id_keadaan = $keadaan[id_keadaan]"));


	// // HAPUS DATA SURV_GEJALA (KECUALI VAP)
	// if($surveilans != "vap"){
	// 	$sql = mysqli_query($conn, "DELETE FROM surv_gejala_$surveilans WHERE id_surv_$surveilans = $pasang[id_surv_$surveilans]");
	// } else {
	// 	$sql = "";
	// }

	// // HAPUS DATA SURV
	// if($sql){
	// 	$sql2 = mysqli_query($conn, "DELETE FROM surv_$surveilans WHERE id_keadaan = $keadaan[id_keadaan]");

	// 	// HAPUS DATA PEMAKAIAN_RUANGAN
	// 	if($sql2){
	// 		$sql3 = mysqli_query($conn, "DELETE FROM pemakaian_ruangan WHERE id_keadaan = $keadaan[id_keadaan]");

	// 		// HAPUS DATA KEADAAN
	// 		if($sql3){
	// 			$sql4 = mysqli_query($conn, "DELETE FROM keadaan_pasien WHERE no_rm = '$norm'");

	// 			// HAPUS DATA PASIEN
	// 			if($sql4){
	// 				$sql5 = mysqli_query($conn, "DELETE FROM identitas_pasien WHERE no_rm = '$norm'");

	// 				if($sql5){
	// 					mysqli_commit($conn);
	// 					echo "<script>alert('Data berhasil dihapus!');
	// 						window.location.href='../data-pasien.php' </script>";

	// 				} else {
	// 					mysqli_rollback($conn);
	// 					echo "<script>alert('Data Identitas Pasien gagal dihapus.');
	// 						window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	// 					// echo mysqli_error ($conn );
	// 					// die;
	// 				}

	// 			} else {
	// 				mysqli_rollback($conn);
	// 				echo "<script>alert('Data Keadaan Pasien Identitas Pasien gagal dihapus.');
	// 					window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	// 				// echo mysqli_error ($conn );
	// 				// die;
	// 			}

	// 		} else {
	// 			mysqli_rollback($conn);
	// 			echo "<script>alert('Data Pemakaian Ruangan gagal dihapus.');
	// 				window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	// 			// echo mysqli_error ($conn );
	// 			// die;
	// 		}

	// 	} else {
	// 		mysqli_rollback($conn);
	// 		echo "<script>alert('Data Pemasangan gagal dihapus.');
	// 			window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	// 		// echo mysqli_error ($conn );
	// 		// die;
	// 	}

	// } else {
	// 	mysqli_rollback($conn);
	// 	echo "<script>alert('Data Surveilans Gejala gagal dihapus.');
	// 		window.location.href='../riwayat-pasien.php?id=$norm' </script>";
	// 	// echo mysqli_error ($conn );
	// 	// die;
	// }

	mysqli_close();
?>