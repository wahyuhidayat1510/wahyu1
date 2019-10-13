<div class="col-sm-12">
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
			<div class="row"><div class="col-md-3">
			<select class="form-control" class="span4" id="tgl_msk" name="tgl_msk">
					<?php
						for ($i=1; $i<=31; $i++) { 
							$tg = ($i<10) ? "0$i" : $i;
							echo "<option value='$tg'>$tg</option>";	
						}
					?>
			</select></div><div class="col-md-5">
			<select class="form-control" class="span4" name="bln_msk">
					<?php
						for($bln=1;$bln<=12;$bln++){
							$nama_bln = array (1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");
							echo "<option value=$bln>$nama_bln[$bln]</option>";
						}
					?>
			</select> </div><div class="col-md-4">
			<select class="form-control" class="span4" name="thn_msk">
					<?php
						for ($i=2015; $i<=2020; $i++) {
							echo "<option value='$i'>$i</option>";	
						}
					?>
			</select></div>
			</div>
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
</div>
