<br />
<?php
//cek button
if ($_POST['Submit'] == "Submit") {
//Kirimkan Variabel
	$kode_brg	= $_POST['kode_brg'];
	$nama_brg	= $_POST['nama_brg'];
	$jenis_brg	= $_POST['jenis_brg'];
	$image		= $_FILES['image']['name'];
	
	//Cek Photo
	if (strlen($image)>0) {
		//upload Photo
		if (is_uploaded_file($_FILES['image']['tmp_name'])) {
			move_uploaded_file ($_FILES['image']['tmp_name'], "img/".$image);
		}
	}
	
	//validasi data jika kosong
	if (empty($_POST['kode_brg']) || empty($_POST['nama_brg']) || empty($_POST['jenis_brg'])) {
	?>
	<script language="JavaScript">
		alert('Data Harap Dilengkapi');
		document.location='homegudang.php?page=form-input-master-barang';
	</script>
	<?php
	}
	//Jika Validasi Terpenuhi
	else {
	include "koneksi.php";
//cek Kode Barang di database
$cek=mysql_num_rows (mysql_query("SELECT kode_brg FROM barang WHERE kode_brg='$_POST[kode_brg]'"));
if ($cek > 0) {
?>
		<script language="JavaScript">
		alert('Kode Barang sudah dipakai !, silahkan diulang kembali');
		document.location='homegudang.php?page=form-input-master-barang';
		</script>
<?php
}
//Masukan data ke Table Login
$input	="INSERT INTO barang (kode_brg, nama_brg, jenis_brg, image) VALUES ('$kode_brg','$nama_brg','$jenis_brg', '$image')";
$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
?>
		<script language="JavaScript">
		alert('Data Master Barang Berhasil diinput');
		document.location='homegudang.php?page=form-input-master-barang';
		</script>
<?php
	}
	else {
	//Jika Gagal
	echo "Data User Gagal diinput, Silahkan diulangi!";
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
	}
}
?>