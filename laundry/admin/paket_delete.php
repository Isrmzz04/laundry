<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM paket WHERE id_paket = '$id'");
if($del){
	header('location:index.php?hal=paket');
}
?>