<section class="content">
<h3>TRANSAKSI</h3>
<a class="btn add" href="index.php?hal=transaksi&aksi=input">Tambah</a>
	<table width="100%" border="1">
		<tr>
			<th>ID TRANSAKSI</th>
			<th>ID USER</th>
			<th>ID MEMBER</th>
			<th>ID OUTLET</th>
            <th>ID PAKET</th>
			<th>TANGGAL</th>
			<th>BATAS WAKTU</th>
            <th>TANGGAL BAYAR</th>
			<th>BIAYA TAMBAHAN</th>
			<th>DISKON</th>
            <th>PAJAK</th>
            <th>QUANTITY</th>
			<th>TOTAL</th>		
			<th>TOTAL BAYAR</th>
			<th>KETERANGAN</th>
			<th>STATUS</th>
            <th>STATUS BAYAR</th>
			<th colspan="2">Opsi</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM transaksi");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $row['id_transaksi'];?></td>
			<td><?php echo $row['id_user'];?></td>
			<td><?php echo $row['id_member'];?></td>
			<td><?php echo $row['id_outlet'];?></td>
            <td><?php echo $row['id_paket'];?></td>
			<td><?php echo $row['tgl'];?></td>
			<td><?php echo $row['batas_waktu'];?></td>
			<td><?php echo $row['tgl_bayar'];?></td>
            <td><?php echo $row['biaya_tambahan'];?></td>
			<td><?php echo $row['diskon'];?></td>
			<td><?php echo $row['pajak'];?></td>
			<td><?php echo $row['qty'];?></td>
			<td><?php echo $row['total'];?></td>
			<td><?php echo $row['total_byr'];?></td>
            <td><?php echo $row['keterangan'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['status_bayar'];?></td>
			<td><a class="btn delete" onclick="return confirm('Yakin untuk menghapus ?')" href="index.php?hal=transaksi&aksi=delete&id=<?php echo $row['id_transaksi'];?>">Hapus</a></td>
		<?php }?>
		</tr>
	</table>
</section>