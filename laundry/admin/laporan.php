<section class="content">
<h2><center>LAPORAN</center></h2>
<a class="btn add" href="index.php?hal=user&aksi=ekspor">Download</a><br><br>
<h3>Data Petugas</h3>
	<table width="100%" border="1">
		<tr>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
		</tr>
			<?php
			$q = $kdb->query("SELECT * FROM user JOIN level ON user.id_level = level.id_level");
			while($row = $q->fetch_assoc()){
			?>
		<tr align="center">
			<td><?php echo $row['nama'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><?php echo $row['nama_level'];?></td>
		<?php }?>
		</tr>
	</table><br><br>
	<a class="btn add" href="index.php?hal=pelanggan&aksi=ekspor">Download</a><br><br>
    <h3>Data Member</h3>
	<table width="100%" border="1">
		<tr>
			<th>No</th>
			<th>ID Member</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Telpon</th>
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
		<?php }?>
		</tr>
	</table><br><br>
	<a class="btn add" href="index.php?hal=download&aksi=input">Download</a><br><br>
<h3>Data Outlet</h3>
	<table width="100%" border="1">
		<tr>
			<th>ID Outlet</th>
			<th>Nama</th>
			<th>ALamat</th>
			<th>Telpon</th>
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
		<?php }?>
		</tr>
	</table><br><br>
	<a class="btn add" href="index.php?hal=download&aksi=input">Download</a><br><br>
<h3>Data Paket</h3>
	<table width="100%" border="1">
		<tr>
			<th>ID Paket</th>
			<th>ID Outlet</th>
			<th>Jenis</th>
			<th>Nama Paket</th>
            <th>Harga</th>
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
		<?php }?>
		</tr>
	</table><br><br>
	<a class="btn add" href="index.php?hal=download&aksi=input">Download</a><br><br>
<h3>TRANSAKSI</h3>
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
			<th>KETERANGAN</th>
			<th>STATUS</th>
            <th>STATUS BAYAR</th>
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
            <td><?php echo $row['keterangan'];?></td>
			<td><?php echo $row['status'];?></td>
			<td><?php echo $row['status_bayar'];?></td>
		<?php }?>
		</tr>
	</table>
</section>