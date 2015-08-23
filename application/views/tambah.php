<form action="<?=base_url(); ?>save" method="post">
	<table>
		<tr>
			<td>Nama : </td><td><input type="text" placeholder="Nama Lengkap" name="nama" value="<?=$nama; ?>"></td>
		</tr>	
		<tr>
			<td>Username : </td><td><input type="text" placeholder="Username" name="username" value="<?=$username; ?>"></td>
		</tr>
		
		<tr>
			<td><input type="hidden" name="status" value="<?=$status; ?>"></td><td><input type="hidden" name="id" value="<?=$id; ?>"></td></tr>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="simpan"></td>
		</tr>	
	</table>	
</form>