<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// ambil data
$sql = "SELECT b.nama_barang,b.jenis,d.jumlah_pinjam, p.tgl_pinjam, p.tgl_kembali , d.nama_peminjam, d.nomor_peminjam, b.kondisi FROM detailpinjam AS d INNER JOIN barang AS b ON d.id_barang = b.id_barang INNER JOIN peminjaman AS p ON d.id_peminjaman = p.id_peminjaman INNER JOIN users AS u ON p.id_user = u.id_user";
$query = $conn->query($sql);
$data_peminjaman = $query->fetch_all(MYSQLI_ASSOC);


require_once 'proses/proses-tambah-peminjaman.php';

// Mengelurkan seluruh data barang yang ada di Database
$sql 			= "SELECT * FROM barang";
$query 			= $conn->query($sql);
$data_barang 	= $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header-dasboard.php';
require_once 'includes/header.php';

if (!isset($_GET['q'])) {
	require_once 'includes/daftar-peminjaman/peminjaman.php';	
} else if ($_GET['q'] == 'tambah-peminjaman') {
	require_once 'includes/daftar-peminjaman/'.$_GET['q'].'.php';	
} else if ($_GET['q'] == 'detail-peminjaman') {
	require_once 'includes/daftar-peminjaman/'.$_GET['q'].'.php';	
} else if ($_GET['q'] == 'edit-peminjaman') {
	require_once 'includes/daftar-peminjaman/'.$_GET['q'].'.php';	
}

// if(!isset($_GET['act'])) {
// 	require_once 'includes/peminjaman/peminjaman.php';
// } else {
// 	if($_GET['act'] == 'cetak') {
// 		require_once 'includes/peminjaman/cetak-data-peminjaman.php';
// 	} else {
// 		require_once 'includes/peminjaman/detail-peminjaman.php';
// 	}
// }

require_once 'includes/footer.php';