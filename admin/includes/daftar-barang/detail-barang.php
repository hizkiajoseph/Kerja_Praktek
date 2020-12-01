<div class="container mt-5">
	
	<h2>Detail Data Barang</h2>
	<hr>
	
	<a href="javascript:history.go(-1)" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<div class="clearfix"></div>
	
	<?php 
		$sql = $conn->query("SELECT * FROM barang WHERE id_lab='".$_GET['id_lab']."'");
		$data = $sql->fetch_assoc();
	?>

	<div class="card mt-3">
		<div class="card-header">
			<?= $data['nama_barang'] ?>
		</div>
		<div class="card-body">
			<p>Jenis barang : <?= $data['jenis'] ?></p>
			<p>Jumlah : <?= $data['jumlah'] ?></p>
			<p>Kondisi : <?= $data['kondisi'] ?></p>
			<p>Tgl. Registrasi : <?= $data['tgl_regis'] ?></p>
		</div>
	</div>

</div>


<?
// "SELECT * FROM barang INNER JOIN users WHERE id_barang = '".$_GET['id']."'"
