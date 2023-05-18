<?php
require('../kdb.php');
session_start();
if(!isset($_SESSION['level3'])){
	header('location:../index.php?msg');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Owner - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<header>
	<h2><span style="color:#333;">KyLoan</span> Laundry</h2>
	<h3><?php echo $_SESSION['nama3']. ' - '. $_SESSION['level3']; ?></h3>
		<ul>
			<p>MAIN NAVIGATION</p>
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="index.php?hal=laporan">Laporan</a></li>
			<li><a onclick="return confirm('Apakah anda yakin ingin keluar?');" href="logout.php">Logout</a></li> 
		</ul> 
</header>
<content>
	<div class="garis"></div>
	<?php 
		if(isset($_GET["hal"])){
			if($_GET["hal"] == "laporan"){
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