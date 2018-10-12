<?php
include('../connect/connect.php');
$id = $_POST['id_gejala'];
$pasangDate = $_POST['pasangDate'];
$bundles1 = $_POST['bundles1'];
$bundles2 = $_POST['bundles2'];
$bundles3 = $_POST['bundles3'];
$bundles4 = $_POST['bundles4'];
$bundles5 = $_POST['bundles5'];
$bundles6 = $_POST['bundles6'];
$bundles7 = $_POST['bundles7'];
$bundles8 = $_POST['bundles8'];
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

$id_surv = mysqli_fetch_array(mysqli_query($conn, "SELECT id_surv FROM surv_gejala_isk WHERE id_surv_gejala = '$id'"));
		
$sql = mysqli_query($conn, "UPDATE surv_gejala_isk SET tanggal_pasang = '$pasangDate', bundles_pemasangan_dc = '$bundles1', bundles_alat_steril = '$bundles2', bundles_handhygiene = '$bundles3', bundles_lepas_noindikasi = '$bundles4', bundles_fiksasi = '$bundles5', bundles_balon = '$bundles6', bundles_adp = '$bundles7', bundles_urinebag = '$bundles8', tanggal_lepas = '$lepasDate', terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate', tanda_infeksi = '$$selected_tanda' WHERE id_surv_gejala = '$id'") && mysqli_query($conn, "UPDATE surv_isk SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = '$id_surv[id_surv]'");
	mysqli_commit($conn);

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM surv_isk WHERE id_surv = '$id_surv[id_surv]')"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../update-surveilans-isk.php?id=$id' </script>";

}

mysqli_close();

?>