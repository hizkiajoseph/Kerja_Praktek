<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container mt-5">
 
  <h2>Edit Data staff</h2>
  <hr>
 
  <a href="data-staff.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <?php 
  $staff = $conn->query("SELECT * FROM users WHERE id_user = '".$_GET['id']."'");
  $data = $staff->fetch_assoc();

  $data['id_level'] == 1 ? $sebagai = "Admin" : $sebagai = "staff";
  ?>

  <form action="proses/proses-ubah-staff.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama">Nama staff</label>
      <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" value="<?= $data['password'] ?>" class="form-control" required readonly>
    </div>
    <div class="form-group">
      <label for="sebagai">Sebagai</label>
      <input type="text" name="sebagai" value="<?= $sebagai ?>" class="form-control" required>
    </div>
    <input type="hidden" name="id" value="<?= $data['id_user'] ?>">
    <button type="submit" class="btn btn-primary float-right">Edit staff</button>
  </form>

</div>