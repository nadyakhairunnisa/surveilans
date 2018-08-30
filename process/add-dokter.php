<?php
include('../connect/connect.php');
$nama = $_POST['nama'];
$spesialis = $_POST['spesialis'];


mysqli_begin_transaction($conn);

$data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM dokter"));

$last_id = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(id_dokter) FROM dokter LIMIT 1"));

if($last_id['MAX(id_dokter)'] == null){
	$new_id = 'DR001';
} else {
	$last_id = substr($last_id['MAX(id_dokter)'],-3);
	if($data<9){
		$new_id = 'DR'.'00'.($last_id+1);
	} else if($data>=9 && $data<99){
		$new_id = 'DR'.'0'.($last_id+1);
	} else if($data>=99){
		$new_id = 'DR'.($last_id+1);
	}
}

		// echo "$new_id";
		// die;
		
$sql = mysqli_query($conn, "INSERT INTO dokter (id_dokter, nama_dokter, id_spesialis) values ('$new_id', '$nama', '$spesialis')");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../data-dokter.php' </script>";
} else {
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.');
	window.location.href='../data-dokter.php' </script>";

}

mysqli_close();

?>