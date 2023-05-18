<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM member WHERE id_member = '$id'");
if($del){
	header('location:index.php?hal=pelanggan');
}
?>