<?php
//buka koneksi ke engine MySQL
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
		else{
		print ("Engine Connected<br>");
		}
//koneksi ke database
	$Koneksi = mysql_select_db("gudang");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
		else{
		print ("Database Connected<br><br><br>");
		}
?>