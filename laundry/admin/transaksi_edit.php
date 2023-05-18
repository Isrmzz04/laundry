<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM transaksi WHERE id_transaksi='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Review Transaksi</h3>
	<table class="tb-create">
		<tr>
			<td>Tanggal :<br><input type="date" name="tgl" value="<?php echo $row['tgl']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Batas Waktu :<br><input type="date" name="batas_waktu" value="<?php echo $row['batas_waktu']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Tanggal Bayar :<br><input type="date" name="tgl_bayar" value="<?php echo $row['tgl_bayar']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Biaya Tambahan :<br><input type="text" name="biaya_tambahan" value="<?php echo $row['biaya_tambahan']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Diskon :<br><input type="text" name="diskon" value="<?php echo $row['diskon']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Pajak :<br><input type="text" name="pajak" value="<?php echo $row['pajak']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Quantity:<br><input type="text" name="qty" value="<?php echo $row['qty']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Keterangan:<br><input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Status :<br><input type="text" name="status" value="<?php echo $row['status']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Status Bayar :<br><input type="text" name="status_bayar" value="<?php echo $row['status_bayar']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=transaksi">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$tgl= $_POST['tgl'];
$batas_waktu = $_POST['batas_waktu'];
$tgl_bayar= $_POST['tgl_bayar'];
$biaya_tambahan= $_POST['biaya_tambahan'];
$diskon = $_POST['diskon'];
$pajak= $_POST['pajak'];
$qty= $_POST['qty'];
$keterangan = $_POST['keterangan'];
$status= $_POST['status'];
$status_bayar= $_POST['status_bayar'];

$res = $kdb->query("UPDATE transaksi SET tgl = '$tgl', batas_waktu = '$batas_waktu', tgl_bayar = '$tgl_bayar', biaya_tambahan = '$biaya_tambahan', diskon = '$diskon', pajak = '$pajak', qty = '$qty', keterangan ='$keterangan', status ='$status', status_bayar ='$status_bayar' WHERE transaksi.id_transaksi = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=transaksi';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=transaksi';</script>";
	}
}
?> 