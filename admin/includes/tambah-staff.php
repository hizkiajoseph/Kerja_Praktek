<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
 if (isset($_SESSION['pesan'])) {
    echo $_SESSION['pesan'];
    unset($_SESSION['pesan']);
 }
?>

<div class="container mt-5">
 
  <h2>Tambah Data Petugas</h2>
  <hr>
 
  <a href="data-staff.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-staff.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama">Nama Petugas</label>
      <input type="text" name="nama" placeholder="Nama Petugas" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="password">Username</label>
      <input type="text" name="username" placeholder="Masukan Username" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" placeholder="Masukan Password" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="sebagai">Sebagai</label>
      <input type="text" name="sebagai" value="Operator" class="form-control" required readonly>
    </div>
    <button type="submit" class="btn btn-primary float-right">Tambah Petugas</button>
  </form>

</div>