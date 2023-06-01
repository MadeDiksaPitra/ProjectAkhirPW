<?php
include_once("../Controllers/controller_binatang.php");
$controller = new controller_binatang();

$kelas = $_POST["kelas"];
print_r("halooooooooooooo");
print_r($kelas);

$controller->viewListBinatang($kelas);