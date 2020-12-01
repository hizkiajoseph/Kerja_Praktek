<div class="container mt-5">


  <h2>Tambah Data Barang</h2>

  <hr>

  <a href="javascript:history.go(-1)" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-barang.php?id_lab=<?php echo$_GET['id_lab'];?>" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama_barang">Nama Barang</label>
      <input type="text" name="nama_barang" placeholder="Contoh: Kursi" class="form-control" autofocus required>
    </div>

    <div class="row">
      <div class="col-md-4">
 <div class="form-group">
   <label for="jenis">Jenis Barang</label>
      <select class="form-control" name="jenis">
        <option value="Sekali Pakai">Sekali Pakai</option>
        <option value="Berkali-kali">Berkali-kali</option>
      </select>
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="jumlah">Jumlah</label>
   <input type="number" name="jumlah" min="1" placeholder="Minimal 1" class="form-control" required>
 </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
 <div class="form-group">
   <label for="kondisi">Kondisi Barang</label>
      <select class="form-control" name="kondisi">
        <option value="Baik">Baik</option>
        <option value="Rusak">Rusak</option>
        <option value="Hilang">Hilang</option>
      </select>
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="keterangan">Keterangan</label>
   <textarea class="form-control" name="keterangan" placeholder="(Opsional)"></textarea>
 </div>
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
 <button type="submit" name="simpan" class="btn btn-success btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>