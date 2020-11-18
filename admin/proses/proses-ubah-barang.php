<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../../index.php');
}

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$id_lab = $_POST['id_lab'];
$tgl_regis = date('Y-m-d');
$id_user = $_SESSION['id_user'];

$update = $conn->query("UPDATE barang SET 
   nama_barang = '$nama_barang',
   jenis = '$jenis',
   jumlah = '$jumlah',
   kondisi = '$kondisi',
   keterangan = '$keterangan',
   id_lab = '$id_lab'
   WHERE id_barang = '$id'");

if ($update) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?h=edit-barang');
}
?>