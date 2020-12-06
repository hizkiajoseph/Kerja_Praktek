<?php

$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_brg_rusak'])) {
	foreach ($_SESSION['list_brg_rusak'] as $list) {
		$explode = explode("-", $list['nama_barang']);
		$nama_barang = trim($explode[0]);
		$kondisi = trim($explode[1]);

		$barang = $conn->query("SELECT * FROM barang WHERE nama_barang='$nama_barang' AND kondisi = '$kondisi'");
		$dt_barang = $barang->fetch_assoc();

		$sisa_dt_brg_rusak = ($dt_barang['jumlah'] - $list['jumlah_rusak']);

		$update_dt_brg_rusak = $conn->query("UPDATE barang SET jumlah = '$sisa_dt_brg_rusak' WHERE id_barang = '$dt_barang[id_barang]'");

		$nama_barang = $_POST['nama_barang'];
		$jenis = $_POST['jenis'];
		$jumlah = $_POST['jumlah'];
		$kondisi = $_POST['kondisi']; 
		$keterangan = $_POST['keterangan'];
		$id_lab = $_GET['id_lab'];
		$tgl_regis = date('Y-m-d');
		$id_user = $_SESSION['id_user'];

		$barang_rusak = $conn->query("INSERT INTO barang VALUES ('', '$id_user','$id_lab','$tgl_pinjam','','$status')");
		
	}	
	unset($_SESSION['list_brg_rusak']);
} 
//elseif isset($_POST['submit']) && isset($_SESSION['list_brg_rusak'])) {
// 	# code...
