<?php
include_once __DIR__ . '/../models/application.php';
header('Content-Type: application/json');

if ($_REQUEST['action'] === 'index') {
  // echo 'API working!'
  echo json_encode(Applications::all());
}

?>
