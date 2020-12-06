<div class="container-fluid">

	<div class="row">
		<div class="col">
			<h2>Data Peminjaman</h2>
		</div>
		<div class="col">
			<a href="?q=tambah-peminjaman&id_lab=<?php echo$_GET['id_lab'];?>" class="btn btn-primary btn-sm float-right">Pinjam Barang</a>
			<a href="data-peminjaman.php?act=cetak" target="_blank"><button class="btn btn-primary btn-sm float-right">Cetak</button></a>
		</div>
	</div>	

<div class="clearfix"></div>

	<table id="table_id"  class="table table-striped table-bordered dt-responsive nowrap">
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
				<td>
					<!-- Button trigger modal -->
					<?php if($data['status']=="Dipinjam"){; ?>
						<button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#<?= $data['status']; ?><?= $data['id_peminjaman']; ?>">Dipinjam
						</button>
					<?php } else{?>
						<button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#<?= $data['id_peminjaman']; ?><?= $data['status']; ?>">Sudah Kembali
						</button>
					<?php } ?>  

				</td>
				<td><?= $data['kondisi']; ?></td>
			</tr>

			<!-- Modal -->
			<div class="modal fade" id="<?= $data['status']; ?><?= $data['id_peminjaman']; ?>" tabindex="-1" aria-labelledby="exampleModalLongTitle" aria-hidden="true" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	Nama Barang 	:		<?= $data['nama_barang']; ?>	</br>
			      	Jumlah Barang 	:		<?= $data['jumlah_pinjam']; ?>	</br>
			        Nama Peminjam 	: 		<?= $data['nama_peminjam']; ?>	</br>
			        NIM Peminjam 	: 		<?= $data['nim_peminjam']; ?>		</br>
			        No.Tlp Peminjam : 		<?= $data['nomor_peminjam']; ?> 	</br>
			        Mata Kuliah Peminjam : 	<?= $data['mk_peminjam']; ?>	</br>
			      </div>
			      <div class="modal-body">
			        Apakah peminjam sudah mengembalikan barang?
			      <div class="modal-group">
			      	<form action="proses/proses-ubah-ket-peminjaman.php?id_lab=<?php echo$_GET['id_lab'];?>" method="POST" class="mt-3" autocomplete="off">
			   		<label for="kondisi">Kondisi Barang</label>
			      		<select class="form-control" name="kondisi">
					        <option value="Baik">Baik</option>
					        <option value="Rusak">Rusak</option>
					        <option value="Hilang">Hilang</option>
						</select>
						<div class="form-group">
							<label for="kondisi_kembali">Jumlah</label>
							<input class="form-control" type="number" name="kondisi_kembali" id="kondisi_kembali" placeholder="jumlah barang rusak atau hilang" required>
						</div>
			      	</form>
				  </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
			        <button type="button" class="btn btn-primary">Iya</button>
			      </div>
			    </div>
			  </div>
			</div> 	


			<?php endforeach; ?>

		</tbody>
	</table>
</div>




			      		
<!-- 				      		<?php  	
				      			switch($kondisi){
							    case 'Baik':
							        
							    break;
							    case 'Rusak':
							        runRusakRequest();
							    break;
							    case 'Hilang':
							        runValidationRequest();
							    break;
							    defaut:
							        runValidationRequest();
								}
							?>
 -->