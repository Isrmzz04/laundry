<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM transaksi WHERE id_transaksi = '$id'");
if($del){
	header('location:index.php?hal=transaksi');
}
?>