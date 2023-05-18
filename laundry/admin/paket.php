<section class="content">
<h3>Data Paket</h3>
<a class="btn add" href="index.php?hal=paket&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>ID Paket</th>
			<th>ID Outlet</th>
			<th>Jenis</th>
			<th>Nama Paket</th>
            <th>Harga</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM paket");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
            <td><?php echo $row['id_paket'];?></td>
			<td><?php echo $row['id_outlet'];?></td>
			<td><?php echo $row['jenis'];?></td>
			<td><?php echo $row['nama_paket'];?></td>
			<td><?php echo $row['harga'];?></td>
			<td><a class="btn edit" href="index.php?hal=paket&aksi=edit&id=<?php echo $row['id_paket'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=paket&aksi=delete&id=<?php echo $row['id_paket'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>