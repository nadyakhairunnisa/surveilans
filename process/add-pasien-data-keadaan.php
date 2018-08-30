<?php
include('../connect/connect.php');
$norm = $_POST['norm'];
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

$sql = mysqli_query($conn, "INSERT INTO keadaan_pasien (tanggal_masuk_rs, cara_masuk, tanggal_keluar_rs, keadaan_keluar, faktor_resiko, no_rm, kode_penyakit) values ('$inDate', '$caramasuk', '$outDate', '$keadaan', '$selected_faktor', '$norm', '$diagnosa')");

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(id_keadaan) FROM keadaan_pasien LIMIT 1"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../create-pasien-data-ruangan.php?id=".$id['MAX(id_keadaan)']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../create-pasien-data-keadaan.php?id=$norm' </script>";

}

mysqli_close();

?>