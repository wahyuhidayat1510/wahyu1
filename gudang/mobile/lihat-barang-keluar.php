<div class="col-sm-12">
<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "gudang";
	mysql_connect($host,$username,$password) or die("Koneksi gagal");
	mysql_select_db($db) or die("Database tidak bisa dibuka");
	//untuk menantukan tanggal awal dan tanggal akhir data di database
	$min_tanggal=mysql_fetch_array(mysql_query("select min(tgl_klr) as min_tanggal from histori_brg_klr"));
	$max_tanggal=mysql_fetch_array(mysql_query("select max(tgl_klr) as max_tanggal from histori_brg_klr"));
?>
<form action="index.php?page=lihat-barang-keluar" method="post" name="postform">
<p align="center"><font color="orange" size="3"><b>Laporan Barang Keluar</b></font></p><br />
	<div class="table-responsive">          
	  <table class="table table-hover">
		<tr >
			<td><b>Dari Tanggal</b></td>
			<td >: <input type="text" name="tanggal_awal" size="16" />
			<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_awal);return false;" >
			<img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
			</td>
		</tr><tr>
			<td width="125"><b>Sampai Tanggal</b></td>
			<td >: <input type="text" name="tanggal_akhir" size="16" />
			<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_akhir);return false;" >
			<img src="calender/calbtn.gif" alt="" name="popcal" width="34" height="29" border="0" align="absmiddle" id="popcal" /></a>				
			</td>
		</tr><tr>
			<td ><input type="submit" value="Cari" name="cari"/></td>
			<td ><input type="reset" value="Reset" /></td>
		</tr>
	</table>
	</div>
</form><br />
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" 
scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;"></iframe>
</div>

