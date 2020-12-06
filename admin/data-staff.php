<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM users WHERE id_level = 2";
$query = $conn->query($sql);
$data = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;
require_once 'includes/header-dasboard.php';
require_once 'includes/header.php';

if (!isset($_GET['h'])) {
	require_once 'includes/daftar-staff/staff.php';	
} else if ($_GET['h'] == 'tambah-staff') {
	require_once 'includes/daftar-staff/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'detail-staff') {
	require_once 'includes/daftar-staff/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'edit-staff') {
	require_once 'includes/daftar-staff/'.$_GET['h'].'.php';	
} else if ($_GET['h'] == 'hapus-staff') {
	
	$hapus = $conn->query("DELETE FROM users WHERE id_user ='".$_GET['id']."'");
	if ($hapus) {
		header('Location: data-staff.php');
	} else {
		header('Location: data-staff.php');
	}

}
require_once 'includes/footer.php';