<?php

session_start();
require_once '../../config/db.php';

if(!isset($_SESSION['user'])) {
 header('Location: ../../index.php');
}

$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$id_lab = $_POST['id_lab'];
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];

if(!isset($nama_barang, $jenis, $jumlah, $kondisi, $keterangan, $id_lab)) {
  header('Location: ../data-barang.php?p=tambah-barang');
}

$sql = "INSERT INTO barang VALUES ('','$nama_barang', '$kondisi','$keterangan','$jumlah','$jenis','$tgl_regis',$id_lab,'$tgl_regis','$petugas')";
$query = $conn->query($sql);

if($query) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?p=tambah-barang');
}

/*
$nama_barang = $conn->real_escape_string($_POST['nama_barang']);
$jenis = $conn->real_escape_string($_POST['jenis']);
$jumlah = $conn->real_escape_string($_POST['jumlah']);
$kondisi = $conn->real_escape_string($_POST['kondisi']);
$keterangan = $conn->real_escape_string($_POST['keterangan']);
$id_lab = $conn->real_escape_string($_POST['id_lab']);
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];
*/
/*
$nama_barang = $_POST['nama_barang'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$id_lab = $_POST['id_lab'];
$tgl_regis = date('Y-m-d');
$petugas = $_SESSION['id_user'];
/*