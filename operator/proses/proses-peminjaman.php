<?php

$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_peminjaman'])) {
	foreach ($_SESSION['list_peminjaman'] as $list) {
		$explode = explode("-", $list['nama_barang']);
		$nama_barang = trim($explode[0]);
		$jenis = trim($explode[1]);

		$barang = $conn->query("SELECT * FROM barang WHERE nama_barang='$nama_barang' AND jenis = '$jenis'");
		$dt_barang = $barang->fetch_assoc();

		$sisa = ($dt_barang['jumlah'] - $list['jumlah_pinjam']);

		$update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");

		$tgl_pinjam = date('Y-m-d');
		$tgl_kembali = $_POST['tgl-kembali'];
		$status = $_POST['status'];
		
		$id_user = $_POST['id_user'];

		$peminjaman = $conn->query("INSERT INTO peminjaman VALUES ('', '$id_user', '$tgl_pinjam','$tgl_kembali','$status')");


		$nama_peminjam = $_POST['nama_peminjam'];
		$nim_peminjam = $_POST['nim_peminjam'];
		$nomor_peminjam = $_POST['nomor_peminjam'];
		$mk_peminjam = $_POST['mk_peminjam'];

		$detailpinjam = $conn->query("INSERT INTO detailpinjam VALUES ('','$list[id_barang]','$list[jumlah_pinjam]','$nama_peminjam','$nim_peminjam','$nomor_peminjam','$mk_peminjam', (SELECT id_peminjaman FROM peminjaman ORDER BY id_peminjaman DESC LIMIT 1))");	//DESC set_time_limit(seconds)1

		$update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");
	}	
	unset($_SESSION['list_peminjaman']);
}