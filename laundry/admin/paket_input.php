
<form action="" method="POST">
	<h3>Tambah Paket</h3>
	<table class="tb-create">
		<tr>
			<td>ID Outlet :<br><input type="text" name="id_outlet" class="input-field"></td>
		</tr>
		<tr>
			<td>Jenis :<br><input type="text" name="jenis" class="input-field"></td>
		</tr>
		<tr>
            <td>Nama Paket :<br><input type="text" name="nama_paket" class="input-field"></td>
		</tr>
        <tr>
			<td>Harga :<br><input type="text" name="harga" class="input-field"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=paket">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$id_outlet = $_POST['id_outlet'];
$jenis = $_POST['jenis'];
$nama_paket= $_POST['nama_paket'];
$harga = $_POST['harga'];

$res = $kdb->query("INSERT INTO paket VALUES('','$id_outlet', '$jenis','$nama_paket','$harga')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=paket';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=paket';</script>";
	}
}
?>