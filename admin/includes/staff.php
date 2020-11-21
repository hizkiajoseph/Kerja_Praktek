<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container mt-5">
 
  <h2>Data Petugas</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=tambah-staff" class="btn btn-primary btn-sm float-right">Tambah Petugas</a>
  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
 <th>No</th>
 <th>Nama Petugas</th>
 <th>Username</th>
 <th>Password</th>
 <th>Sebagai</th>
 <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($staff as $r): 
      
      if($r['id_level'] == 1) {
        $sebagai = "Admin";
      } else {
        $sebagai = "Staff";
      }
      ?>

      <tr>
 <td><?= $no++ ?></td>
 <td><?= $r['nama'] ?></td>
 <td><?= $r['username'] ?></td>
 <td><?= $r['password'] ?></td>
 <td><?= $sebagai ?></td>
        <td>
          <div class="d-inline">
     <a href="?p=detail-staff&id=<?= $r['id_user'] ?>" class="btn btn-primary btn-sm">Detail</a>
     <a href="?p=edit-staff&id=<?= $r['id_user'] ?>" class="btn btn-success btn-sm">Edit</a>
     <a href="?p=hapus-staff&id=<?= $r['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
     </div>
 </td>
      </tr>
      
      <?php endforeach ?>
    </tbody>
  </table>

</div>