<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title>Lab Keperawatan</title>
  <!-- CSS -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="TEXT/css" href="style/css/bootstrap.min.css">
</head>
<body>

	<?php
	session_start();
	  // memunculkan pesan error
	if(isset($_SESSION['error'])) {
	?>

	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<center><?= $_SESSION['error']; ?></center>
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
    </button>
  </div>

  <?php
  }
  ?>

  <div class="card col-sm-4 mx-auto mt-5">
    <h5 class="card-header">Form Login</h5>
    <div class="card-body">
      <form action="proses/login_proses.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username" autofocus>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukan Password">
        </div>
        <div class="form-group">
          <label for="level">Sebagai</label>
          <select name="level" class="form-control">
            <option value="">-- Masuk Sebagai ---</option>
            <option value="2">Operator</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
      </form>
    </div>
  </div>

</body>
</html>