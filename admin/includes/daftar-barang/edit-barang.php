<div class="container mt-5">
	
	<h2>Ubah Data Barang</h2>
	<hr>

	<a href="javascript:history.go(-1)"	class="btn btn-primary btn-sm float-left">&larr; kembali</a>
	<div class="clearfix"></div>

	<?php
	$barang = $conn->query("SELECT * FROM barang WHERE id_barang = '" .$_GET['id']. "'");
	$data = $barang->fetch_assoc();
	?>

	<form action="proses/proses-ubah-barang.php" method="POST" class="mt-3" autocomplete="off">
		<input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
		<input type="hidden" name="id_lab" value="<?= $data['id_lab'] ?>">
		<div class="form-group">
			<label for="nama_barang">Nama Barang</label>
			<input type="text" name="nama_barang" placeholder="Contoh: Kursi" class="form-control" autofocus required value="<?= $data['nama_barang'] ?>">
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
				   <label for="jenis">Jenis Barang</label>
				      <select class="form-control" name="jenis" value="<?= $data['jenis'] ?>">
				        <option value="Sekali Pakai">Sekali Pakai</option>
				        <option value="Berkali-kali">Berkali-kali</option>
				      </select>
 				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="jumlah">Jumlah</label>
					<input type="number" name="jumlah" min="1" placeholder="Minimal 1" class="form-control" required value="<?= $data['jumlah'] ?>" required readonly>
				</div>
			</div>
		</div>

		<div class="row">
			<input type="hidden" name="kondisi" value="<?= $data['kondisi'] ?>">
			<div class="col-md-4">
				<div class="form-group">
					<label for="ket">Keterangan</label>
					<textarea class="form-control" name="keterangan" placeholder="(Opsional)"><?= $data['keterangan'] ?></textarea>
				</div>
			</div>
			<div class="col-md-4">
				<button type="submit" name="simpan" class="btn btn-success btn-sm" style="margin-top:32px; width:100%;"><b>Ubah</b></button>
			</div>
		</div>
	</form>
</div>