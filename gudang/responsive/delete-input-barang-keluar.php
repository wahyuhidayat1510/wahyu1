<?php
	include "koneksi.php";
	// Cek ID
	if (isset($_GET['id_tran_klr'])) {
		$id_tran_klr = $_GET['id_tran_klr'];
	// membaca nama file yang akan dihapus
	$query   = "SELECT * FROM histori_brg_klr WHERE id_tran_klr='$id_tran_klr'";
	$hasil   = mysql_query($query);
	while (	$data = mysql_fetch_array ($hasil)) {
			$kode_brg = stripslashes ($data['kode_brg']);
			$jml_klr = stripslashes ($data['jml_klr']);
		}
	}
	else {
		die ("Error. Tidak ada ID yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
		if (!empty($id_tran_klr) && $id_tran_klr != "") {
			$hapus = "DELETE FROM histori_brg_klr WHERE id_tran_klr='$id_tran_klr'";
			$sql = mysql_query ($hapus);
			//Update Kuantitas di tabel Barang
			$update="UPDATE barang SET kuantitas=kuantitas + $jml_klr WHERE kode_brg='$kode_brg'";
			$query_update =mysql_query($update);
			if ($query_update) {		
				?>
					<script language="JavaScript">
					alert('Data Input Barang Keluar Berhasil di Cancel!');
					document.location='index.php?page=form-input-barang-keluar';
					</script>
				<?		
			}
			else {
				echo "<h2><font color=red><center>Data Input Barang Keluar Gagal di Cancel!</center></font></h2>";	
			}
		}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>