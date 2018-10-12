<?php
include('../connect/connect.php');
$id_surv = $_POST['id_surv'];
$infeksiDate = $_POST['pasangDate'];
$keterangan = $_POST['keterangan'];
$dateKultur = $_POST['dateKultur'];
$hasilKultur = $_POST['hasilKultur'];

$tanda = $_POST['tanda'];
$selected_tanda = "";
foreach ($tanda as $tanda_infeksi) 
{
	$selected_tanda .= $tanda_infeksi . ", ";
}
$selected_tanda = substr($selected_tanda, 0, -2);


mysqli_begin_transaction($conn);

$id_k = mysqli_fetch_array(mysqli_query($conn, "SELECT id_keadaan FROM surv_ido WHERE id_surv = '$id_surv'"));
		
$sql = mysqli_query($conn, "INSERT INTO surv_gejala_ido (id_surv, tanggal_kejadian, tanda_infeksi, keterangan_infeksi, tanggal_kultur, hasil_kultur) values ('$id_surv', '$infeksiDate', '$selected_tanda', '$keterangan', '$dateKultur', '$hasilKultur')") && mysqli_query($conn, "UPDATE surv_ido SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = $id_surv");

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
	window.location.href='../create-surveilans-ido.php?id=$id_surv' </script>";

}

mysqli_close();

?>