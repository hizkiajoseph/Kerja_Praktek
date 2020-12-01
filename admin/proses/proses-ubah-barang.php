<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../../index.php');
}

$id_lab = $_GET['id_lab'];
$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$tgl_regis = date('Y-m-d');	
$petugas = $_SESSION['id_user'];

$update = $conn->query("UPDATE barang SET 
							nama_barang = '$nama_barang',
							jenis = '$jenis',
							jumlah = '$jumlah',
							kondisi = '$kondisi',
							keterangan = '$ket'
					WHERE id_barang = '$id'");

if ($update) {
	header("Location: ../data-barang.php?id_lab=$id_lab");
} else {
	header("Location: ../data-barang.php?p=edit-barang&id=$id&id_lab=$id_lab");
}