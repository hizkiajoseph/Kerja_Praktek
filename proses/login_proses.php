<?php

session_start();

require_once '../config/db.php';

// mencegah sql injection menggunakan fungsi mysql_real_escape_string()
$username = $conn->real_escape_string($_POST['username']);
$password = sha1($conn->real_escape_string($_POST['password']));
$level = $_POST['level'];

if(empty($username) || empty($password) || empty($level)) {
  header('Location: ../index.php');
}

$sql = "SELECT * FROM user WHERE username = '" .$username. "' AND password = '" .$password. "' AND id_level = '" .$level. "'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();
var_dump($result);

if($query->num_rows > 1) {
  $_SESSION['name'] = $result['nama'];
  $_SESSION['id_user'] = $result['id_user'];

  if($result['id_level'] == 1) {
    header('Location: ../admin/index.php');
  } else {
    header('Location: ../staff/index.php');
  }
} else {
  $_SESSION['error'] = "Data yang anda masukan salah   , silahkan coba lagi";
  header('Location: ../index.php');
}

?>