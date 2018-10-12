<?php
include('../connect/connect.php');
$id_keadaan = $_POST['id_keadaan'];
$pasang = $_POST['pasang'];

mysqli_begin_transaction($conn);

if($pasang=="phlebitis"){

	$jenis = $_POST['jenis'];
	$tujuan = $_POST['tujuan'];
	$keterangan = $_POST['keterangan'];

	$sql = mysqli_query($conn, "INSERT INTO surv_phlebitis (id_keadaan, jenis_invasif, tujuan_pemasangan, keterangan) values ('$id_keadaan', '$jenis', '$tujuan', '$keterangan')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");

} else if($pasang=="iadp"){
	
	$tujuan = $_POST['tujuan'];
	$keterangan = $_POST['keterangan'];
	
	$sql = mysqli_query($conn, "INSERT INTO surv_iadp (id_keadaan, tujuan_pemasangan, keterangan) values ('$id_keadaan', '$tujuan', '$keterangan')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");

} else if($pasang=="isk"){

	$jenis = $_POST['jenis'];
	$pemeriksaan = $_POST['pemeriksaan'];
	$date = $_POST['date'];
	$keterangan = $_POST['keterangan'];

	$sql = mysqli_query($conn, "INSERT INTO surv_isk (id_keadaan, jenis_invasif, jenis_pemeriksaan, tanggal_pemeriksaan, keterangan_pemeriksaan) values ('$id_keadaan', '$jenis', '$pemeriksaan', '$date', '$keterangan')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");

} else if($pasang=="vap"){

	$no = $_POST['no'];
	$pasangDate = $_POST['pasangDate'];
	$bundles1 = $_POST['bundles1'];
	$bundles2 = $_POST['bundles2'];
	$bundles3 = $_POST['bundles3'];
	$bundles4 = $_POST['bundles4'];
	$bundles5 = $_POST['bundles5'];
	$lepasDate = $_POST['lepasDate'];
	$infeksiDate = $_POST['infeksiDate'];
	$keterangan = $_POST['keterangan'];
	$thorax = $_POST['thorax'];
	$dateKultur = $_POST['dateKultur'];
	$hasilKultur = $_POST['hasilKultur'];


	//Menyimpan data checkbox faktor
	$tanda = $_POST['tanda'];
	$selected_tanda= "";
	foreach ($tanda as $sign) 
	{
		$selected_tanda .= $sign . ", ";
	}
	$selected_tanda = substr($selected_tanda, 0, -2);

	$terjadi_infeksi = "Ya";
	if($selected_tanda==""){
		$terjadi_infeksi = "Tidak";
	}

	$sql = mysqli_query($conn, "INSERT INTO surv_vap (id_keadaan, no_ventilator, tanggal_pasang, bundles_posisi, bundles_kebersihan_tangan, bundles_kebersihan_mulut, bundles_manajemen_sekresi, bundles_pengkajian, tanggal_lepas, terjadi_infeksi, tanggal_infeksi, tanda_infeksi, keterangan_infeksi, foto_thorax, tanggal_kultur, hasil_kultur) values ('$id_keadaan', '$no', '$pasangDate', '$bundles1', '$bundles2', '$bundles3', '$bundles4', '$bundles5', '$lepasDate', '$terjadi_infeksi', '$infeksiDate','$selected_tanda', '$keterangan', '$thorax', '$dateKultur', '$hasilKultur')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");;

} else if($pasang=="ido"){

	$operasiDate = $_POST['operasiDate'];
	$tindakanOpr = $_POST['tindakanOpr'];
	$bundles1 = $_POST['bundles1'];
	$bundles2 = $_POST['bundles2'];
	$bundles3 = $_POST['bundles3'];
	$bundles4 = $_POST['bundles4'];
	$bundles5 = $_POST['bundles5'];
	$dokterKons = $_POST['dokterKons'];
	$dokterOpr = $_POST['dokterOpr'];
	$emergensi = $_POST['emergensi'];
	$jenisOperasi = $_POST['jenisOperasi'];
	$anestesi = $_POST['anestesi'];
	$noKamarOpr = $_POST['noKamarOpr'];
	$rondeKamarOpr = $_POST['rondeKamarOpr'];
	$implant = $_POST['implant'];
	$implantTrauma = $_POST['implantTrauma'];
	$endoscopi = $_POST['endoscopi'];
	$endoscopiTrauma = $_POST['endoscopiTrauma'];
	$inTime = $_POST['inTime'];
	$skorASA = $_POST['skorASA'];
	$pjKamarOpr = $_POST['pjKamarOpr'];
	$dateKultur = $_POST['dateKultur'];
	$hasilKultur = $_POST['hasilKultur'];

	$sql = mysqli_query($conn, "INSERT INTO surv_ido (id_keadaan, tanggal_operasi, tindakan_operasi, bundles_tidak_mencukur, bundles_cukur, bundles_suhu, bundles_antibiotik, bundles_kontrol_guladarah, id_dokter_konsultan, dokter_operator, sifat_operasi_emergensi, jenis_operasi, anestesi_umum, no_kamar_operasi, ronde_operasi, jenis_implant, trauma_implant, jenis_endoscopi, trauma_endoscopi, lama_operasi, skor_asa, pj_kamar_operasi, tanggal_kultur, hasil_kultur) values ('$id_keadaan', '$operasiDate', '$tindakanOpr', '$bundles1', '$bundles2', '$bundles3', '$bundles4', '$bundles5', '$dokterKons', '$dokterOpr', '$emergensi', '$jenisOperasi', '$anestesi', '$noKamarOpr', '$rondeKamarOpr', '$implant', '$implantTrauma', '$endoscopi', '$endoscopiTrauma', '$inTime', '$skorASA', '$pjKamarOpr', '$dateKultur', '$hasilKultur')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");;

} else if($pasang=="antibiotik"){

	$namaObat = $_POST['namaObat'];
	$pemakaianDate = $_POST['pemakaianDate'];
	$dosis = $_POST['dosis'];
	$jenis = $_POST['jenis'];
	$indikasi = $_POST['indikasi'];

	$sql = mysqli_query($conn, "INSERT INTO pemakaian_antibiotik (id_keadaan, nama_obat, tanggal_pemakaian, dosis, jenis, indikasi) values ('$id_keadaan', '$namaObat', '$pemakaianDate', '$dosis', '$jenis', '$indikasi')") && mysqli_query($conn, "UPDATE keadaan_pasien SET jenis_surveilans = '$pasang' WHERE id_keadaan = '$id_keadaan'");
}



if($sql) {
	mysqli_commit($conn);

	$id = mysqli_fetch_array(mysqli_query($conn, "SELECT no_rm FROM keadaan_pasien WHERE id_keadaan = $id_keadaan LIMIT 1"));

	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../riwayat-pasien.php?id=".$id['no_rm']."#timeline' </script>";
} else {
	echo mysqli_error ($conn );
	die;
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.".mysqli_error ($conn)."');
	window.location.href='../create-pasien-data-pemasangan.php?id=$id_keadaan' </script>";

}

mysqli_close();

?>