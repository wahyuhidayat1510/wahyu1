<?php
include 'dbconfig.php';

$id = $_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "delete from tbl_barang  where id=".$id;

$response = mysqli_query($conn, $query) or die('Error query:  '.$query);
$result["errormsg"]="Success";

if ($response == 1){
	echo json_encode($result);
}
else{
	$result["errormsg"]="Fail";
	echo json_encode($result);
}

?>