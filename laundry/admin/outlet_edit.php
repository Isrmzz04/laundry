<?php
$id = $_GET['id'];
$edit = $kdb->query("SELECT * FROM outlet WHERE id_outlet='$id'");
$row = $edit->fetch_assoc();
?>
<form action="" method="POST">
	<h3>Edit Outlet</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" value="<?php echo $row['nama']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>Alamat :<br><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"class="input-field"></td>
		</tr>
        <tr>
			<td>Telepon :<br><input type="text" name="telp" value="<?php echo $row['telp']; ?>"class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Edit" class="btn">
				<a href="index.php?hal=outlet">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$res = $kdb->query("UPDATE outlet SET nama= '$nama', alamat = '$alamat', telp = '$telp' WHERE outlet.id_outlet = '$id'");
	if($res){
		echo "<script>alert('Update data berhasil!');document.location.href='index.php?hal=outlet';</script>";
	} else{
		echo "<script>alert('Gagal! mengupdate data!');document.location.href='index.php?hal=outlet';</script>";
	}
}
?> 