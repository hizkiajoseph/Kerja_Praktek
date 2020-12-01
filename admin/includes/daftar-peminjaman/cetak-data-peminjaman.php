<div class="container mt-5">

	<h2>Data Peminjaman</h2>

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

<script type="text/javascript">
	window.print();
</script>