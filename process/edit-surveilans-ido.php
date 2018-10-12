<?php
include('../connect/connect.php');
$id_surv = $_POST['id_gejala'];
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

$id_surv = mysqli_fetch_array(mysqli_query($conn, "SELECT id_surv FROM surv_gejala_ido WHERE id_surv_gejala = '$id'"));
		
$sql = mysqli_query($conn, "UPDATE surv_gejala_ido SET tanggal_kejadian = '$infeksiDate', tanda_infeksi = '$selected_tanda', keterangan_infeksi = '$keterangan', tanggal_kultur = '$dateKultur', hasil_kultur = '$hasilKultur' WHERE id_surv_gejala = '$id'") && mysqli_query($conn, "UPDATE surv_ido SET terjadi_infeksi = '$terjadi', tanggal_infeksi = '$infeksiDate' WHERE id_surv = '$id_surv[id_surv]'");

if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = (SELECT id_keadaan FROM surv_ido WHERE id_surv = '$id_surv[id_surv]')"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../update-surveilans-ido.php?id=$id' </script>";

}

mysqli_close();

?>