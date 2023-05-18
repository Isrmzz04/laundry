
<form action="" method="POST">
	<h3>Tambah Outlet</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" class="input-field"></td>
		</tr>
		<tr>
			<td>Alamat :<br><input type="text" name="alamat" class="input-field"></td>
		</tr>
		<tr>
		</tr>
        <tr>
			<td>Telepon :<br><input type="text" name="telp" class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=outlet">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$res = $kdb->query("INSERT INTO outlet VALUES('','$nama', '$alamat', '$telp')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=outlet';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=outlet';</script>";
	}
}
?>