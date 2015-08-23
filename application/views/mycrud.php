<form action="search" method="post"><input type="text" name="cari"><input type="submit" value="cari nama"></form>	
<table border="2">
	<tr><td>Nama</td><th>Username</th><th>Action</th></tr>
	<?php foreach ($content as $c): ?>
		<tr>
			<td>
				<a href="select/<?=$c['id'] ?>" title=""><?=$c['nama']; ?></a>
			</td>
			<td>
				<?=$c['username']; ?>
			</td>
			<td><a href="update/<?=$c['id']; ?>"> edit</a> | <a href="delete/<?=$c['id']; ?>"> delete</a></td>
		</tr>
	<?php endforeach ?>
	
</table>

<a href="add">tambah data</a>