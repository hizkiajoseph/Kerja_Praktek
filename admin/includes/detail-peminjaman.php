<div class="container mt-5">

	<div class="row">
		<div class="col">
			<h2>Data Peminjaman</h2>
		</div>
		<div class="col">
			<a href="?p=tambah-barang&id_lab=<?php echo$_GET['id_lab'];?>" class="btn btn-primary btn-sm float-right">Pinjam Barang</a>
			<a href="data-peminjaman.php?act=cetak" target="_blank"><button class="btn btn-primary btn-sm float-right">Cetak</button></a>
		</div>
	</div>	

	<div class="clearfix"></div>

		<table class="table table-sm mt-3=">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Jenis</th>
				<th>Jumlah Pinjam</th>
				<th>Tgl. Pinjam</th>
				<th>Tgl. Kembali</th>
				<th>Peminjam</th>
				<th>Nomor Telpon</th>
				<th>Ket</th>
				<th>Kondisi</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($data_peminjaman as $data) :
			?>

			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nama_barang']; ?></td>
				<td><?= $data['jenis']; ?></td>
				<td><?= $data['jumlah_pinjam']; ?></td>
				<td><?= $data['tgl_pinjam']; ?></td>
				<td><?= $data['tgl_kembali']; ?></td>
				<td><?= $data['nama_peminjam']; ?></td>
				<td><?= $data['nomor_peminjam']; ?></td>
				<td><?= $data['nomor_peminjam']; ?></td>
				<td><?= $data['kondisi']; ?></td>
			</tr>

			<?php endforeach; ?>

		</tbody>
	</table>
</div>