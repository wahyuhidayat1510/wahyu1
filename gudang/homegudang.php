<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="Gudang"){
    die("Anda bukan user gudang");//jika bukan admin jangan lanjut
}
?>
<html>
<head>
<title>Aplikasi Gudang</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: relative;
    top: 0.5em;
    left: 1em;
    width: 11em;
}
ul.navbar li {
    background: #E6E6FA;
    margin: 0.5em 0;
    padding: 0.3em;
    border-right: 0.5em solid #FF6600;
}
ul.navbar a {
    text-decoration: none;
}
h1 {
    font-family: Helvetica, Geneva, Arial, Sans-Regular, sans-serif
}
address {
    margin-top: 1em;
    padding-top: 1em;
    border-top: thin dotted
}
	a:link,a:visited,a:active {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	text-decoration: none;
}
a:hover {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: blue;
	text-decoration: none;
}
</style>
</head>
<body>
<br>
<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="10" bgcolor="#FFFF00">&nbsp;</td>
	<td width="140" height="120" bgcolor="#FFFF00"><div align="center"><img src="image/logo.png" width="100" height="90"></div></td>
	<td width="10" bgcolor="#FFFF00">&nbsp;</td>
	<td width="1136" bgcolor="#FFFF00"><div align="center"><span class="header">APLIKASI INVENTARIS GUDANG<br><br></span>
	<b>Your Company</b><span class="header"><br></span></div></td>
	<td width="10" bgcolor="#FFFF00"></td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td height="27"><div align="left"><strong><? echo "Tanggal : ".date("d-M-y");?></strong></div></td>
	<td>&nbsp;</td>
	<td align="right">Selamat Datang&nbsp;<font color="#FF6600"><strong> <?=$_SESSION['nama']?></strong></font>&nbsp;|&nbsp;<a href="logout.php">Log Out >>&nbsp;&nbsp;</a></td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"><table width="144" height="400" bgcolor="#B0C4DE" border="0" cellspacing="0" cellpadding="0" align="top">
		<tr>
		<td valign="top"><ul class="navbar">
			<li><b>MAIN MENU</b></li><br>
			<li><a href="homegudang.php?page=form-input-master-barang" title="input-master-barang">&nbsp;Master Barang</a></li>
			<li><a href="homegudang.php?page=lihat-data-barang" title="lihat data barang">&nbsp;Data Barang</a></li>
			<li><a href="homegudang.php?page=form-input-barang-masuk" title="input barang masuk">&nbsp;Barang Masuk</a></li>
			<li><a href="homegudang.php?page=form-input-barang-keluar" title="input barang keluar">&nbsp;Barang Keluar</a></li>
			<li><a href="homegudang.php?page=lihat-barang-masuk" title="laporan barang masuk">&nbsp;Lap Brg Masuk</a></li>
			<li><a href="homegudang.php?page=lihat-barang-keluar" title="laporan barang keluar">&nbsp;Lap Brg Keluar</a></li>
		</ul></td>
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				case 'input-master-barang' : include "input-master-barang.php"; break;
				case 'input-barang-masuk' : include "input-barang-masuk.php"; break;
				case 'input-barang-keluar' : include "input-barang-keluar.php"; break;
				case 'form-input-master-barang' : include "form-input-master-barang.php"; break;
				case 'form-input-barang-masuk' : include "form-input-barang-masuk.php"; break;
				case 'form-input-barang-keluar' : include "form-input-barang-keluar.php"; break;
				case 'lihat-data-barang' : include "lihat-data-barang.php"; break;
				case 'lihat-barang-masuk' : include "lihat-barang-masuk.php"; break;
				case 'lihat-barang-keluar' : include "lihat-barang-keluar.php"; break;
				case 'review-input-barang-masuk' : include "review-input-barang-masuk.php"; break;
				case 'review-input-barang-keluar' : include "review-input-barang-keluar.php"; break;
				case 'delete-input-barang-masuk' : include "delete-input-barang-masuk.php"; break;
				case 'delete-input-barang-keluar' : include "delete-input-barang-keluar.php"; break;
				case 'delete-data-barang' : include "delete-data-barang.php"; break;
				case 'edit-data-barang' : include "edit-data-barang.php"; break;
				case 'laporan-data-barang-masuk' : include "laporan-data-barang-masuk.php"; break;
				case 'laporan-data-barang-keluar-bydate' : include "laporan-data-barang-keluar-bydate.php"; break;
				case 'laporan-data-barang-keluar-byname' : include "laporan-data-barang-keluar-byname.php"; break;
				case 'main' :
				default : include 'aboutuser.php';	
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="#F8F8FF">
    	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>	
</tr>
<tr bgcolor="#FFFF00">
	<td height="36" colspan="5" bgcolor="#FFFF00"><div align="right" style="margin:0 10px 0 0;"><font color="#000">Development 2015 | by Raja Putra Media</font><br></div></td>
</tr>
</table>
<div align="center"></div>
</body>
</html>