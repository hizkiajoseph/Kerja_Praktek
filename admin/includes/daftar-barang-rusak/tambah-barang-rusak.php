
<?php 
$sql = "SELECT * FROM barang WHERE kondisi='Baik' AND id_lab='".$_GET['id_lab']."'";
$query = $conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);
?>

<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      Petugas : <?= $_SESSION['nama'] ?>
    </div>
    <div class="card-body">

        <div class="col-lg">
          <form action="" method="POST" class="mt-3" autocomplete="off">
            <div class="form-group">
              <label for="id_barang">Nama Barang</label>
              <input list="barang" name="nama_barang" id="nama_barang" placeholder="Pilih barang" class="form-control" required>
              <datalist id="barang">
                
                <?php 
                foreach ($data_barang as $barang): 
                  $daftar = $barang['nama_barang'].' - '.$barang['kondisi'];
                  ?>
                  
                  <option value="<?= $daftar ?>">
                    
                  <?php endforeach ?>
                  
                </select>
              </div>
              <div class="form-group">
                <label for="jumlah_barang">Jumlah Rusak</label>
                <input type="number" name="jumlah_rusak" placeholder="Jumlah Barang" min="1" max="1000" class="form-control" required>
              </div>
              <button type="submit" name="submit" class="btn btn-success btn-block">Input Transaksi</button>
              <div class="clearfix"></div>
          </form>
          </div>
          </div>

      </div>
    </div>
  </div>

  <?php 
  if(isset($_GET["index"])){
    header('Location: index.php');
  } 