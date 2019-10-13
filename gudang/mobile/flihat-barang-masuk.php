
<!DOCTYPE html> 
<html><head> 
	<title>Inventaris Gudang</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="description" content="Woody is a clean theme for mobile devices.">
    
	<!-- Stylesheets -->
    <link rel="stylesheet" href="css/default.min.css" />
    <link rel="stylesheet" href="css/woody.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />    
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700' rel='stylesheet' type='text/css'>

	<!-- JavaScripts -->
 	<script type="text/javascript" src="js/klass.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.mobile-1.0.1.js"></script>
	<script src="js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="js/code.photoswipe.jquery-3.0.4.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/misc.js"></script>

</head> 

<body> 
<div data-role="page" id="flihat-barang-masuk" data-title="Barang Masuk">

    <!-- Header -->
    <div data-role="header" class="header">
       <a href="#" data-rel="back" data-icon="arrow-l" data-transition="flip">Back</a> 
       <h4>Data Barang Masuk</h4>
    </div><!-- END OF: Header -->


    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Content -->
        <div data-role="content" class="content">
			<?php //fungsi kode otomatis
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "gudang";
		mysql_connect($host,$username,$password) or die("Koneksi gagal");
		mysql_select_db($db) or die("Database tidak bisa dibuka");
		
		function kdauto($tabel, $inisial){
		$struktur   = mysql_query("SELECT * FROM $tabel");
		$field      = mysql_field_name($struktur,0);
		$panjang    = mysql_field_len($struktur,0);
		$qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row  = mysql_fetch_array($qry);
		if ($row[0]=="") {
		$angka=0;
		}
		else {
		$angka= substr($row[0], strlen($inisial));
		}
		$angka++;
		$angka      =strval($angka);
		$tmp  ="";
		for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
		}
		return $inisial.$tmp.$angka;
		}
	?>
	<form action="index.php?page=input-barang-masuk" method="POST" name="form-input-barang-masuk" enctype="multipart/form-data">
	<p align="center"><font color="orange" size="3"><b>FORM INPUT BARANG MASUK</b></font></p><br />		
		<div class="form-group">
			<label for="id_tran_msk">Kode Transaksi</label>
			<input class="form-control" name="id_tran_msk" type="text" id="id_tran_msk" size="15" value="<?php echo kdauto("histori_brg_msk","IN-"); ?>" disabled="disabled" />
			<input name="id_tran_msk" type="hidden" id="id_tran_msk" value="<?php echo kdauto("histori_brg_msk","IN-"); ?>" />
		</div>
		<div class="form-group">
			<label for="tgl_msk">Tanggal</label>
			<input class="form-control" type="text" name="nama_brg" id="nama_brg" size="40" /></td>		
		</div>
		<div class="form-group">
			<label for="kode_brg">Kode Barang</label>
				<?php
					mysql_connect($host,$username,$password) or die("Koneksi gagal");
					mysql_select_db($db) or die("Database tidak bisa dibuka");
					$result = mysql_query("SELECT * FROM barang");    
					$jsArray = "var nama_brg = new Array();\n";    
					echo '<select class="form-control" id="kode_brg" name="kode_brg" onchange="changeValue(this.value)">';    
					echo '<option> -- Pilih Kode Barang -- </option>';    
					while ($row = mysql_fetch_array($result)) {    
						echo '<option value="' . $row['kode_brg'] . '">' . $row['kode_brg'] . '</option>';    
						$jsArray .= "nama_brg['" . $row['kode_brg'] . "'] = {name:'" . addslashes($row['nama_brg']) . "',jenis:'".addslashes($row['jenis_brg'])."'};\n";    
					}    
					echo '</select>';
					?>
					<script type="text/javascript">    
						<?php echo $jsArray; ?>  
						function changeValue(id){  
						document.getElementById('nama_brg').value = nama_brg[id].name;  
						document.getElementById('jenis_brg').value = nama_brg[id].jenis;  
						};  
					</script>
		</div>
		<div class="form-group">
			<label for="nama_brg">Nama Barang</label>
			<input type="text" class="form-control" name="nama_brg" id="nama_brg" size="40" /></td>
		</div>
		<div class="form-group">
			<label for="jenis_brg">Jenis Barang</label>
			<input type="text" class="form-control" name="jenis_brg" id="jenis_brg" size="40" /></td>
		</div>
		<div class="form-group">
			<label for="jml_msk">Jumlah Barang Masuk</label>
			<input type="text" class="form-control" name="jml_msk" id="jml_msk" "size="7" placeholder="masukkan jumlah barang">&nbsp; *Harus di Isi</td>
		</div>
		<input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;
		<input type="reset" name="reset" value="Reset"></td>
		
	</form>
		</div><!-- END OF: Content -->
        
               
    </div><!--END OF: Wrapper -->
    
    <!-- Footer -->
	<div data-role="footer" class="footer">
        <h4>Copyright 2018, Project of Responsive Web; Faculty of Information Technology</h4>
	</div><!-- END OF: Footer -->
    
</div><!-- END OF: About -->

</body>
</html>