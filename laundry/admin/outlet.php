<section class="content">
<h3>Data Outlet</h3>
<a class="btn add" href="index.php?hal=outlet&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>ID Outlet</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telpon</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM outlet");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $row['id_outlet'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['telp'];?></td>
			<td><a class="btn edit" href="index.php?hal=outlet&aksi=edit&id=<?php echo $row['id_outlet'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=outlet&aksi=delete&id=<?php echo $row['id_outlet'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>