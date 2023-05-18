<?php
require('../kdb.php');
session_start();
if(!isset($_SESSION['level2'])){
	header('location:../index.php?msg');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kasir - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<header>
	<h2><span style="color:#333;">KyLoan</span> Laundry</h2>
	<h3><?php echo $_SESSION['nama2']. ' - '. $_SESSION['level2']; ?></h3>
		<ul>
			<p>MAIN NAVIGATION</p>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="index.php?hal=pelanggan">Pelanggan</a></li>
			<li><a href="index.php?hal=transaksi">Tranksaksi</a></li>
			<li><a href="index.php?hal=laporan">Laporan</a></li>
			<li><a onclick="return confirm('Apakah anda yakin ingin keluar?');" href="logout.php">Logout</a></li> 
		</ul> 
</header>
<content>
	<div class="garis"></div>
	<?php 
		if(isset($_GET["hal"])){
			if($_GET['hal'] == "pelanggan"){
				if(@$_GET["aksi"]=="input"){
					require_once "pelanggan_input.php";
				}else if(@$_GET["aksi"]=="edit"){
					require_once "pelanggan_edit.php";
				}else if(@$_GET["aksi"]=="delete"){
					require_once "pelanggan_delete.php";
				}else{
					require_once "pelanggan.php";
				}
			
			}else if($_GET["hal"] == "transaksi"){
				if(@$_GET["aksi"]=="bayar"){
				}else if(@$_GET["aksi"]=="input"){
					require_once "transaksi_input.php";
					require_once "transaksi_input.php";
				} else if(@$_GET['aksi'] == "delete"){
					require_once "transaksi_delete.php";
				}else{
					require_once "transaksi.php";
				}
			}else if($_GET["hal"] == "laporan"){
				if(@$_GET["aksi"]=="delete"){
					require_once "laporan_delete.php";
				} else{
					require_once "laporan.php";
				}
			}else{
					require "welcome.php";
				}
			}else{
				require "welcome.php";
			}
		
		?>
</content>
</div>
</body>
</html>