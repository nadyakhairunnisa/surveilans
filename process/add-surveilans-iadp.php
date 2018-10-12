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


if($terjadi == "ya"){
	$infeksiDate = $_POST['infeksiDate'];
	$tanda = $_POST['tanda'];
	$selected_tanda = "";
	foreach ($tanda as $tanda_infeksi) 
	{
		$selected_tanda .= $tanda_infeksi . ", ";
	}
	$selected_tanda = substr($selected_tanda, 0, -2);
} else {
	$infeksiDate = NULL;
	$selected_tanda = NULL;
}


mysqli_begin_transaction($conn);

$id_k = mysqli_fetch_array(mysqli_query($conn, "SELECT id_keadaan FROM surv_iadp WHERE id_surv = '$id_surv'"));
		
$sql = mysqli_query($conn, "INSERT INTO surv_gejala_iadp (id_surv, lokasi_pasang, tanggal_pasang, bundles_handhygiene, bundles_persiapan, bundles_penggunaan_apd, bundles_preparasi, bundles_dressing, bundles_dokumentasi, tanggal_lepas, terjadi_infeksi, tanda_infeksi, tanggal_infeksi) values ('$id_surv', '$lokasi', '$pasangDate', '$bundles1', '$bundles2', '$bundles3', '$bundles4', '$bundles5', '$bundles6', '$lepasDate', '$terjadi', '$selected_tanda', '$infeksiDate')") && mysqli_query($conn, "UPDATE surv_iadp SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = $id_surv");

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = $id_k[id_keadaan]"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../create-surveilans-iadp.php?id=$id_surv' </script>";

}

mysqli_close();

?>