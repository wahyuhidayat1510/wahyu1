<br />
<?php
	include "koneksi.php";
	// Cek ID
	if (isset($_GET['id_tran_msk'])) {
		$id_tran_msk = $_GET['id_tran_msk'];
	// membaca nama file yang akan dihapus
	$query   = "SELECT * FROM histori_brg_msk WHERE id_tran_msk='$id_tran_msk'";
	$hasil   = mysql_query($query);
	while (	$data = mysql_fetch_array ($hasil)) {
			$kode_brg = stripslashes ($data['kode_brg']);
			$jml_msk = stripslashes ($data['jml_msk']);
		}
	}
	else {
		die ("Error. Tidak ada ID yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
		if (!empty($id_tran_msk) && $id_tran_msk != "") {
			$hapus = "DELETE FROM histori_brg_msk WHERE id_tran_msk='$id_tran_msk'";
			$sql = mysql_query ($hapus);
			//Update Kuantitas di tabel Barang
			$update="UPDATE barang SET kuantitas=kuantitas - $jml_msk WHERE kode_brg='$kode_brg'";
			$query_update =mysql_query($update);
			if ($query_update) {		
				?>
					<script language="JavaScript">
					alert('Data Input Barang Masuk Berhasil di Cancel!');
					document.location='homegudang.php?page=form-input-barang-masuk';
					</script>
				<?		
			}
			else {
				echo "<h2><font color=red><center>Data Input Barang Masuk Gagal di Cancel!</center></font></h2>";	
			}
		}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>