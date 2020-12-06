	<div class="container mt-1">
	
	<h2>Data Barang Rusak</h2>
	<hr>

	<a href="index.php" class="btn btn-primary btn-sm float-left">&larr; Kembali</a>
	<a href="?p=tambah-barang-rusak&id_lab=<?php echo$_GET['id_lab'];?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>

	<div class="clearfix"></div>

	<table id="table_id" class="table table-striped table-bordered dt-responsive nowrap">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kondisi</th>
				<th>Jumlah</th>
				<th>Jenis</th>
				<th>Tgl. Regis</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($data_barang as $barang): ?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $barang['nama_barang']; ?>
				<td><?= $barang['kondisi']; ?>
				<td><?= $barang['jumlah']; ?>
				<td><?= $barang['jenis']; ?>
				<td><?= $barang['tgl_regis']; ?>
				<td>
					<div class="d-inline">
						<a href="?p=detail-barang&id=<?= $barang['id_barang']; ?>&id_lab=<?= $barang['id_lab']; ?>" class="btn btn-primary btn-sm">Detail</a>
						<a href="?p=edit-barang&id=<?= $barang['id_barang']; ?>&id_lab=<?= $barang['id_lab']; ?>" class="btn btn-success btn-sm">Edit</a>
						<a href="?p=tambah-barang-ygada&id=<?= $barang['id_barang']; ?>&id_lab=<?= $barang['id_lab']; ?>" class="btn btn-success btn-sm">tambah</a>
						<a href="?p=hapus-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>

					</div>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>