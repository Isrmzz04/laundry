
<form action="" method="POST">
	<h3>Tambah Member</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" class="input-field"></td>
		</tr>
		<tr>
			<td>Alamat :<br><input type="text" name="alamat" class="input-field"></td>
		</tr>
		<tr>
        <td>Jenis Kelamin :<br>
				<select name="jenis_kelamin" class="input-field">
					<option selected>Jenis Kelamin</option>
					<option value="1">PRIA</option>
					<option value="2">WANITA</option>
                    <option value="2">OTHER</option>
				</select>
			</td>
		</tr>
        <tr>
			<td>Telepon :<br><input type="text" name="telp" class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=pelanggan">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$telp = $_POST['telp'];

$res = $kdb->query("INSERT INTO member VALUES('','$nama', '$alamat','$jenis_kelamin','$telp')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=pelanggan';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=pelanggan';</script>";
	}
}
?>