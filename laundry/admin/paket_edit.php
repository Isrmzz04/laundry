<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM paket WHERE id_paket='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Edit Paket</h3>
	<table class="tb-create">
		<tr>
			<td>Jenis :<br><input type="text" name="jenis" value="<?php echo $row['jenis']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Nama Paket :<br><input type="text" name="nama_paket" value="<?php echo $row['nama_paket']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Harga :<br><input type="text" name="harga" value="<?php echo $row['harga']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=paket">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$jenis = $_POST['jenis'];
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];

$res = $kdb->query("UPDATE paket SET jenis = '$jenis', nama_paket = '$nama_paket', harga = '$harga' WHERE paket.id_paket = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=paket';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=paket';</script>";
	}
}
?> 