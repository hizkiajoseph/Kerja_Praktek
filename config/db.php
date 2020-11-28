<?php

try {
	$conn = new mysqli('localhost', 'root', '','lab-keperawatan');
} catch (Exception $e) {
	echo $e->getMessage();
}