
<form action="" method="POST">
	<h3>Tambah Transaksi</h3>
	<table class="tb-create">
		<tr>
			<td>ID USER :<br><input type="text" name="id_user" class="input-field"></td>
		</tr>
		<tr>
			<td>ID MEMBER :<br><input type="text" name="id_member" class="input-field"></td>
		</tr>
        <tr>
			<td>ID OUTLET :<br><input type="text" name="id_outlet" class="input-field"></td>
		</tr>
		<tr>
			<td>ID PAKET :<br><input type="text" name="id_paket" class="input-field"></td>
		</tr>
        <tr>
			<td>Tanggal :<br><input type="date" name="tgl" class="input-field"></td>
		</tr>
		<tr>
			<td>Batas Waktu :<br><input type="date" name="batas_waktu" class="input-field"></td>
		</tr>
        <tr>
			<td>Tanggal Bayar :<br><input type="date" name="tgl_bayar" class="input-field"></td>
		</tr>
		<tr>
			<td>Biaya Tambahan :<br><input type="text" name="biaya_tambahan" class="input-field"></td>
		</tr>
		<tr>
			<td>Pajak :<br><input type="text" name="pajak" class="input-field"></td>
		</tr>
        <tr>
			<td>Quantity :<br><input type="text" name="qty" class="input-field"></td>
		</tr>
        <tr>
			<td>Keterangan :<br><input type="text" name="keterangan" class="input-field"></td>
		</tr>
		<tr>
			<td>Status :<br><input type="text" name="status" class="input-field"></td>
		</tr>
		<tr>
        <td>Status Bayar :<br>
				<select name="status_bayar" class="input-field">
					<option selected>STATUS BAYAR</option>
					<option value="1">BAYAR</option>
					<option value="2">BELUM BAYAR</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=transaksi">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id_user 		= $_POST['id_user'];
$id_member 		= $_POST['id_member'];
$id_outlet		= $_POST['id_outlet'];
$id_paket 		= $_POST['id_paket'];
$tgl 			= $_POST['tgl'];
$batas_waktu 	= $_POST['batas_waktu'];
$tgl_bayar		= $_POST['tgl_bayar'];
$biaya_tambahan = $_POST['biaya_tambahan'];
$pajak	 		= $_POST['pajak'];
$qty 			= $_POST['qty'];
$keterangan 	= $_POST['keterangan'];
$status			= $_POST['status'];
$status_bayar	= $_POST['status_bayar'];
$total		= $biaya_tambahan * $qty + $pajak;
if ($total >= 45000) {
	$diskon = 2000;
	 $total_byr= $total - 2000;
}else {
	$diskon = 0;
	$total_byr = $total - 0;
}


$res = $kdb->query("INSERT INTO transaksi VALUES('','$id_user', '$id_member','$id_outlet','$id_paket', '$tgl', '$batas_waktu','$tgl_bayar','$biaya_tambahan', '$diskon','$pajak','$qty','$total', '$total_byr', '$keterangan', '$status', '$status_bayar')");
	if($res){
		echo "<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=transaksi';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=transaksi';</script>";
	}
}
?>