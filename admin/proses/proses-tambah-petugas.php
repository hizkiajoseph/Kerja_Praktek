<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../../index.php');
}

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = sha1($_POST['password']);
$sebagai = $_POST['sebagai'];
$sebagai == "Operator" ? $sebagai = 2 : 0;

if (!isset($nama, $username, $password, $sebagai)) {
	header('Location: ../staff.php?h=tambah-staff');
}

$sql = "INSERT INTO users VALUES ('', '$nama', '$username', '$password', '$sebagai')";
$query = $conn->query($sql);

if ($query) {
	header('Location: ../data-staff.php');
} else {
	header('Location: ../data-staff.php?h=tambah-staff');
}