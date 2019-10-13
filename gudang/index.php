<?php
require_once 'redirect.php';
?>
<html>
<head>
<title>Aplikasi Gudang</title>
<link href="style.css" rel="stylesheet" type="text/css" />
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
	<td align="right">Selamat Datang&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr bgcolor="white">
	<td>&nbsp;</td>
	<td rowspan="4" valign="top"></td>
	<td rowspan="4">&nbsp;</td>
	<td rowspan="4" valign="top"><table width="1136" height="400" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="936" valign="top">
			<?php
			$page = (isset($_GET['page']))? $_GET['page'] : "main";
			switch ($page) {
				default : include 'default.php';	
			}
			?></td>	
		</tr></table></td>
	<td rowspan="4">&nbsp;</td>
</tr>
<tr bgcolor="white">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="white">
    	<td>&nbsp;</td>
</tr>
<tr bgcolor="white">
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