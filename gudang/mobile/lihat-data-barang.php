
<div class="col-sm-12">
	<h2 align="center"><font color="orange" size="4" face="arial"><b>Data Barang</b></font></h2><br>
	<input type="button" value="Export To PDF" title="Save as PDF Format" onclick=window.open('http:/gudang/responsive/laporan-data-barang.php','_blank');><br><br>
	<div class="table-responsive">          
	  <table class="table table-hover">
	  <thread>
		<tr bgcolor="#FF6600">
			<th>No</th>
			<th>Image</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Stock on Hand</th>
			<th>Action</th>    
		</tr>
	  </thead>
	  <tbody>
	  
<?php
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	$Cari="SELECT * FROM barang ORDER BY kode_brg";
	$Tampil = mysql_query($Cari);
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($Tampil)) {
			$kode_brg	= stripslashes ($hasil['kode_brg']);
			$nama_brg	= stripslashes ($hasil['nama_brg']);
			$jenis_brg	= stripslashes ($hasil['jenis_brg']);
			$kuantitas	= stripslashes ($hasil['kuantitas']);
			$image		= stripslashes ($hasil['image']);
		{
	$nomer++;
?>
	<tr>
		<td><?=$nomer?> </td>
		<td><?php 
		if (empty($image)) 
			echo "<img src='img/no-img.png' width='100' height='110'><br>No Image";
		    else
			echo "<img class='shadow' src='img/$image' width='100' height='110' title='$image'>";
		?>&nbsp;</td>
		<td><?=$kode_brg?> </td>
		<td><?=$nama_brg?> </td>
		<td><?=$jenis_brg?> </td>
		<td><?=$kuantitas?></td>
		<td><a href="index.php?page=edit-data-barang&kode_brg=<?=$kode_brg?>">Edit</a> | 
		<a href="index.php?page=delete-data-barang&kode_brg=<?=$kode_brg?>">Delete</a></td>
	</tr>
	
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
	  </tbody>
	</table>
</div>

</div>

