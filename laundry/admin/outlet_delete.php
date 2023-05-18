<?php
$id = $_GET['id'];
$del = $kdb->query("DELETE FROM outlet WHERE id_outlet = '$id'");
if($del){
	header('location:index.php?hal=outlet');
}
?>