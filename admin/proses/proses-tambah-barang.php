<?php

session_start();
require_once '../../config/db.php';

// if(!isset($_SESSION['user'])) {
// 	header('Location: ../../index.php');
// }

$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$id_lab = $_GET['id_lab'];
$tgl_regis = date('Y-m-d');
$id_user = $_SESSION['id_user'];

if(!isset($nama_barang, $jenis, $jumlah, $kondisi, $keterangan, $id_lab)) {
  header('Location: ../data-barang.php?p=tambah-barang');
}

$sql = "INSERT INTO barang VALUES ('','$nama_barang', '$kondisi','$keterangan','$jumlah','$jenis','$tgl_regis',$id_lab,'$id_user')";
$query = $conn->query($sql);

if($query) {
  header('Location: ../data-barang.php');
  $_SESSION['pesan'] = '<div class="alert alert-success" role="alert">Data barang ditambahkan</div>';
} else {
  header('Location: ../data-barang.php?p=tambah-barang');
  $_SESSION['pesan'] = '<div class="alert alert-danger" role="alert">Data barang gagal ditambahkan</div>';
}