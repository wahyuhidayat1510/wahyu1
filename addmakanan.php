<?php
$nama = $_GET['nama'];
$harga = $_GET['harga'];

$link = mysql_connect('localhost', 'root', '') or die('Cannot connect to the DB');
mysql_select_db('db_makanan', $link) or die('Cannot select the DB');

/* grab the posts from the db */
$query = "insert into tbl_makanan (nama_makanan,harga) values('".$nama."',".$harga.")";
$result = mysql_query($query, $link) or die('Error query:  '.$query);
echo "SUCCESS";

?>