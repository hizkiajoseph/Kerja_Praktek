<?php

session_start();
require_once '../config/db.php';

// user tidak bisa langsung mengakses form Admin
// jika $_SESSION['user'] belum diset, maka diarahkan ke form login
if(!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
} 

require_once 'includes/header_lab.php';
require_once 'includes/dashboard_lab.php';
require_once 'includes/footer.php';