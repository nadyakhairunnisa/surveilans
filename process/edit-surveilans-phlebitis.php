<?php
include('../connect/connect.php');
$id = $_POST['id_gejala'];
$lokasi = $_POST['lokasi'];
$pasangDate = $_POST['pasangDate'];
$bundles1 = $_POST['bundles1'];
$bundles2 = $_POST['bundles2'];
$bundles3 = $_POST['bundles3'];
$bundles4 = $_POST['bundles4'];
$bundles5 = $_POST['bundles5'];
$lepasDate = $_POST['lepasDate'];
$terjadi = $_POST['terjadi'];
$infeksiDate = $_POST['infeksiDate'];

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
		window.location.href='../update-surveilans-phlebitis.php?id=$id' </script>";
	}
} else {
	$infeksiDate = NULL;
	$selected_tanda = NULL;
}


mysqli_begin_transaction($conn);

$id_surv = mysqli_fetch_array(mysqli_query($conn, "SELECT id_surv FROM surv_gejala_phlebitis WHERE id_surv_gejala = '$id'"));


if($tanggal_pasang <= $today && $tanggal_lepas <= $today){

	if($tanggal_pasang <= $tanggal_lepas){

		$sql = mysqli_query($conn, "UPDATE surv_gejala_phlebitis SET lokasi_pasang = '$lokasi', tanggal_pasang = '$pasangDate', bundles_kebersihan = '$bundles1', bundles_lepas_bykeluhan = '$bundles2', bundles_cek_balutan = '$bundles3', bundles_lepas_bywaktu = '$bundles4', bundles_cek_tempat = '$bundles5', tanggal_lepas = '$lepasDate', terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate', tanda_infeksi = '$selected_tanda' WHERE id_surv_gejala = '$id'") && mysqli_query($conn, "UPDATE surv_phlebitis SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = '$id_surv[id_surv]'");

		if($sql) {
			mysqli_commit($conn);

			$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM surv_phlebitis WHERE id_surv = '$id_surv[id_surv]')"));

			echo "<script>alert('Data berhasil disimpan!');
			window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
		} else {
			echo mysqli_error ($conn );
			die;
			mysqli_rollback($conn);
			echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
			window.location.href='../update-surveilans-phlebitis.php?id=$id' </script>";

		}

	} else {
		echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk melewati Tanggal Keluar.');
		window.location.href='../update-surveilans-phlebitis.php?id=$id' </script>";
	}

} else {
	echo "<script>alert('Data gagal disimpan. Note: Tanggal Masuk/Keluar melewati Tanggal Hari Ini.');
	window.location.href='../update-surveilans-phlebitis.php?id=$id' </script>";
}


mysqli_close();

?>