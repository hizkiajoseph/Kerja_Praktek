<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

require_once 'proses/proses-tambah-barang-rusak.php';

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM barang WHERE kondisi='Rusak' AND id_lab='".$_GET['id_lab']."'";
$query = $conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header-dasboard.php';
require_once 'includes/header.php';

if (!isset($_GET['p'])) {
	require_once 'includes/daftar-barang-rusak/barang-rusak.php';	
} else if ($_GET['p'] == 'tambah-barang-rusak') {
	require_once 'includes/daftar-barang-rusak/'.$_GET['p'].'.php';	
} else if ($_GET['p'] == 'detail-barang-rusak') {
	require_once 'includes/daftar-barang/'.$_GET['p'].'.php';	
} else if ($_GET['p'] == 'edit-barang') {
	require_once 'includes/daftar-barang-rusak/'.$_GET['p'].'.php';	
}else if ($_GET['p'] == 'tambah-barang-ygada-rusak') {
	require_once 'includes/daftar-barang-rusak/'.$_GET['p'].'.php';	
} else if ($_GET['p'] == 'hapus-barang') {
	
	$hapus = $conn->query("DELETE FROM barang WHERE id_barang='".$_GET['id']."'");
	if ($hapus) {
		header('Location: data-barang.php');
	} else {
		header('Location: data-barang.php');
	}

}
require_once 'includes/footer.php';