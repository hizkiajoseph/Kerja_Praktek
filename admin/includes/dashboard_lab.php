<div class="container mt-5">

  <div class="row text-center">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
 
          <?php 
          $sql = $conn->query("SELECT COUNT(*) AS jmlBarang FROM barang");
          $barang = $sql->fetch_assoc();
          ?>
          <?php
          $id_lab = 1;
          ?>
          
          <h5 class="card-title">Laboratorium Central</h5>
          <p class="card-text">Jumlah barang saat ini</p>
          <h3><?= $barang['jmlBarang']; ?></h3>
          <a href="data-barang.php?id=<?php echo $id_lab?>" class="card-link">Lihat Data Barang</a>
          
        </div>
      </div>
    </div>
  </div>

</div>