<?php
$kdb = new mysqli("localhost","root","","db_laundry");
if($kdb->connect_error){
	die("Gagal Terkoneksi: " .$kdb->connect_error);
}
?>