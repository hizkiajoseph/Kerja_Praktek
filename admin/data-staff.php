<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
}

// Mengelurkan seluruh data staff yang ada di Database
$sql = "SELECT * FROM user WHERE id_level";
$query = $conn->query($sql);
$staff = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['p'])) {
  require_once 'includes/staff.php'; 
} else if ($_GET['p'] == 'tambah-staff') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'detail-staff') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'edit-staff') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'hapus-staff') {
 
  $hapus = $conn->query("DELETE FROM user WHERE id_user='".$_GET['id']."'");
  if ($hapus) {
    header('Location: data-staff.php');
  } else {
    header('Location: data-staff.php');
  }
}

require_once 'includes/footer.php';