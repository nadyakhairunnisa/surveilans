<?php
include('../connect/connect.php');
$nama = $_POST['nama'];


mysqli_begin_transaction($conn);

$data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM ruangan"));

$last_id = mysqli_fetch_array(mysqli_query($conn, "SELECT MAX(kode_ruangan) FROM ruangan"));

if($last_id['MAX(kode_ruangan)'] == null){
	$new_id = 'R001';
} else {
	$last_id = substr($last_id['MAX(kode_ruangan)'],-3);
	if($data<9){
		$new_id = 'R'.'00'.($last_id+1);
	} else if($data>=9 && $data<99){
		$new_id = 'R'.'0'.($last_id+1);
	} else if($data>=99){
		$new_id = 'R'.($last_id+1);
	}
}

		// echo "$new_id";
		// die;
		

$sql = mysqli_query($conn, "INSERT INTO ruangan (kode_ruangan, nama_ruangan) values ('$new_id', '$nama')");

if($sql) {
	mysqli_commit($conn);
	echo "<script>alert('Data berhasil disimpan!');
	window.location.href='../data-ruangan.php' </script>";
} else {
	mysqli_rollback($conn);
	echo "<script>alert('Data gagal disimpan.');
	window.location.href='../data-ruangan.php' </script>";

}

mysqli_close();

?>