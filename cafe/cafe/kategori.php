<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "db_kuliner";
	$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    $sql = "Select * from tb_kuliner";
	$query = mysqli_query($koneksi, $sql);
	$rows=array();
	while($data = mysqli_fetch_assoc($query)){
		$rows[] = $data;
	}
	echo json_encode($rows);
?>