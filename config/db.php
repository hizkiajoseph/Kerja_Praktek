<?php

try {
  $conn = new mysqli('localhost', 'root','', 'lab_keperawatan');
} catch (Exception $e) {
  echo $e->getMessage();
}

?>