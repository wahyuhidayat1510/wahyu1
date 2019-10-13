<?php
$link = mysql_connect('localhost', 'root', '') or die('Cannot connect to the DB');
mysql_select_db('db_makanan', $link) or die('Cannot select the DB');

/* grab the posts from the db */
$query = "SELECT nama_makanan, harga FROM tbl_makanan";
$result = mysql_query($query, $link) or die('Errorquery:  '.$query);

$rows = array();
while ($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
$data = "{makanan:".json_encode($rows)."}";
echo $data;
?>