
<form action="" method="POST">
	<h3>Tambah Petugas</h3>
	<table class="tb-create">
		<tr>
			<td>Nama :<br><input type="text" name="nama" class="input-field"></td>
		</tr>
		<tr>
			<td>Username :<br><input type="text" name="user" class="input-field"></td>
		</tr>
		<tr>
			<td>Password :<br><input type="password" name="pass" class="input-field"></td>
		</tr>
        <tr>
			<td>Id Outlet :<br><input type="text" name="id_outlet" class="input-field"></td>
		</tr>
		<tr>
			<td>Level :<br>
				<select name="level" class="input-field">
					<option selected>Level Akses</option>
					<option value="1">Admin</option>
					<option value="2">Kasir</option>
                    <option value="2">Owner</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="create" value="Tambah" class="btn">
				<a href="index.php?hal=user">Kembali</a>
			</td>
		</tr>
	</table>
	</form>
<?php
if(isset($_POST['create'])){
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$id_outlet = $_POST['id_outlet'];
$level = $_POST['level'];

$res = $kdb->query("INSERT INTO user VALUES('','$nama', '$user','$pass','$id_outlet', '$level')");
	if($res){
		echo 	"<script>alert('Data berhasil ditambahkan!');document.location.href='index.php?hal=user';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan data!');document.location.href='index.php?hal=user';</script>";
	}
}
?>