<?php

include("connect/connect.php");

$query = $_GET['q'];

$result = mysqli_query($conn, "SELECT * FROM identitas_pasien WHERE no_rm LIKE '{$query}%'");

$data_array = [];

foreach ($result as $index => $row) {
	$data_array[] = [
		'no_rm'			=> $row['no_rm'],
		'nama_pasien'	=> $row['nama_pasien'],
		'jenis_kelamin'	=> $row['jenis_kelamin'],
		'tanggal_lahir'	=> $row['tanggal_lahir'],
		'alamat'		=> $row['alamat']
	];
}

echo json_encode($data_array);
