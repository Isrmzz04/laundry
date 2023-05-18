<section class="content">
<h3>Data Member</h3>
<a class="btn add" href="index.php?hal=pelanggan&aksi=input">Registrasi</a>
	<table width="100%" border="1">
		<tr>
			<th>No</th>
			<th>ID Member</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Telpon</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$i = 1;
			$q = $kdb->query("SELECT * FROM member");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['id_member'];?></td>
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['alamat'];?></td>
			<td><?php echo $row['jenis_kelamin'];?></td>
			<td><?php echo $row['telp'];?></td>
			<td><a class="btn edit" href="index.php?hal=pelanggan&aksi=edit&id=<?php echo $row['id_member'];?>">Edit</a></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=pelanggan&aksi=delete&id=<?php echo $row['id_member'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>