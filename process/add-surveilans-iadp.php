<?php
include('../connect/connect.php');
$id_surv = $_POST['id_surv'];
$lokasi = $_POST['lokasi'];
$pasangDate = $_POST['pasangDate'];
$bundles1 = $_POST['bundles1'];
$bundles2 = $_POST['bundles2'];
$bundles3 = $_POST['bundles3'];
$bundles4 = $_POST['bundles4'];
$bundles5 = $_POST['bundles5'];
$bundles6 = $_POST['bundles6'];
$lepasDate = $_POST['lepasDate'];
$terjadi = $_POST['terjadi'];

$tanggal_pasang = date_create($pasangDate);
$tanggal_lepas = date_create($lepasDate);
$today = date_create();

$interval = date_diff($tanggal_lepas, $tanggal_pasang);
$total_hari = ($interval->days);


if($terjadi == "ya"){
	$infeksiDate = $_POST['infeksiDate'];
	$tanggal_infeksi = date_create($infeksiDate);
	if($tanggal_infeksi <= $tanggal_lepas && $tanggal_infeksi >= $tanggal_pasang){
		$tanda = $_POST['tanda'];
		$selected_tanda = "";
		foreach ($tanda as $tanda_infeksi) 
		{
			$selected_tanda .= $tanda_infeksi . ", ";
		}
		$selected_tanda = substr($selected_tanda, 0, -2);
	} else {
		echo "<script>alert('Data gagal disimpan. Note: Tanggal Infeksi diluar dari Tanggal Pemasangan.');
		window.location.href='../create-surveilans-iadp.php?id=$id_surv' </script>";
	}
} else {
	$infeksiDate = NULL;
	$selected_tanda = NULL;
}


mysqli_begin_transaction($conn);

$id_k = mysqli_fetch_array(mysqli_query($conn, "SELECT id_pemakaian_ruangan FROM surv_iadp WHERE id_surv = '$id_surv'"));

if($tanggal_pasang <= $today && $tanggal_lepas <= $today){

	if($tanggal_pasang <= $tanggal_lepas){

		
		$sql = mysqli_query($conn, "INSERT INTO surv_gejala_iadp (id_surv, lokasi_pasang, tanggal_pasang, bundles_handhygiene, bundles_persiapan, bundles_penggunaan_apd, bundles_preparasi, bundles_dressing, bundles_dokumentasi, tanggal_lepas, total_hari, terjadi_infeksi, tanda_infeksi, tanggal_infeksi) values ('$id_surv', '$lokasi', '$pasangDate', '$bundles1', '$bundles2', '$bundles3', '$bundles4', '$bundles5', '$bundles6', '$lepasDate', '$total_hari', '$terjadi', '$selected_tanda', '$infeksiDate')") && mysqli_query($conn, "UPDATE surv_iadp SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = $id_surv");

		if($sql) {
			mysqli_commit($conn);

			$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM pemakaian_ruangan WHERE id_pemakaian_ruangan = $id_k[id_pemakaian_ruangan])"));

			echo "<script>alert('Data berhasil disimpan!');
			window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
		} else {	
			mysqli_rollback($conn);
			echo mysqli_error ($conn );
			die;
			echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
			window.location.href='../create-surveilans-iadp.php?id=$id_surv' </script>";

		}

	} else {
		echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk melewati Tanggal Keluar.');
		window.location.href='../create-surveilans-iadp.php?id=$id_surv' </script>";
	}

} else {
	echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk/Keluar melewati Tanggal Hari Ini.');
	window.location.href='../create-surveilans-iadp.php?id=$id_surv' </script>";
}



mysqli_close();

?>