<form action="index.php?page=input-data-user" method="POST" name="form-input-data-user" enctype="multipart/form-data">
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="789"><font color="orange" size="3" face="arial"><b>Form Input Data User</b></font></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td align="right" width="789" height="32"><input type="button" value="Back To Home" onclick=location.href="index.php" title="kembali ke homeadmin">&nbsp;</td>
	</tr>
	<tr>
		<td width="20" height="36">&nbsp;</td>
		<td width="165">Username</td>
		<td><input type="text" name="user" size="15" maxlength="10" style="text-transform: uppercase;"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Nama</td>
		<td><input type="text" name="nama" size="40" maxlength="40"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Password</td>
		<td><input type="text" name="password" size="20" maxlength="20"></td>
	</tr>
	<tr>
		<td height="36">&nbsp;</td>
		<td>Level Hak Akses</td>
		<td><select name="level">
				<option value="-">-pilihan-
				<option value="Admin">Admin
				<option value="Manager">Manager
				<option value="Gudang">Gudang
			</select></td>
	</tr>  
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td width="589" height="32">&nbsp;</td>
	</tr>
</table>
</form>
