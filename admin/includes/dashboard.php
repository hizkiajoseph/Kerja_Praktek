<div class="container mt-5">

	<div class="row text-center">
 
          <?php 
          $sql = $conn->query("SELECT * FROM laboratorium");

          while ($lab = $sql->fetch_assoc()) { 
            $sqlbarang = $conn->query("SELECT count(*) AS jumlah FROM barang WHERE id_lab = '$lab[id_lab]'");
            $barang = $sqlbarang->fetch_assoc();
            echo "
            <div class='col-mb-4'>
              <div class='card' style='width: 18rem;''>
                <div class='card-body'>
                  <h5 class='card-title'>Laboratorium $lab[nama_lab]</h5>
                    <p class='card-text'>Jumlah barang saat ini</p>
                      <h3>$barang[jumlah]</h3>
                  <a href='data-barang.php?id_lab=$lab[id_lab]' class='card-link'>Lihat Data Barang</a>
                </div>
              </div>
            </div>";
          }
          ?>          
      
  	</div>

</div>