<?php
include('../connect/connect.php');
$id_k = $_POST['id_k'];
$inDate = $_POST['inDate'];
$caramasuk = $_POST['caramasuk'];
$outDate = $_POST['outDate'];
$keadaan = $_POST['keadaan'];
$diagnosa = $_POST['diagnosa'];

//Menyimpan data checkbox faktor
$faktor = $_POST['faktor'];
$selected_faktor = "";
foreach ($faktor as $faktor_r) 
{
	$selected_faktor .= $faktor_r . ", ";
}
$selected_faktor = substr($selected_faktor, 0, -2);


// echo"$selected_faktor";
// die;

mysqli_begin_transaction($conn);

$sql = mysqli_query($conn, "UPDATE keadaan_pasien SET tanggal_masuk_rs = '$inDate', cara_masuk = '$caramasuk', tanggal_keluar_rs = '$outDate', keadaan_keluar = '$keadaan', faktor_resiko = '$selected_faktor', kode_penyakit = '$diagnosa' WHERE id_keadaan = '$id_k'");

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = '$id_k' LIMIT 1"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../update-data-keadaan.php?id=$id_k' </script>";

}

mysqli_close();

?>