<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrator</title>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../admin/index.php">Beranda<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../admin/data-barang.php?id_lab=<?php echo$_GET['id_lab'];?>">Daftar Barang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../admin/data-barang-rusak.php?id_lab=<?php echo$_GET['id_lab'];?>">Barang Rusak</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Barang Hilang</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../admin/data-peminjaman.php?id_lab=<?php echo$_GET['id_lab'];?>">Data Peminjaman</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Riwayat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../admin/data-staff.php?id_lab=<?php echo$_GET['id_lab'];?>">Staff</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.data').DataTable();
		});
	</script>