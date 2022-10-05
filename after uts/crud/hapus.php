<?php
require_once 'function.php';


$koneksi = new databasenya;

if (!isset($_GET['id'])) {
    echo '<h1>Tidak Ada DATANYA!!!!!!</h1>';
    die;
}


if ($koneksi->hapus($_GET['id']) === true) {
    header("location: index.php");
}
