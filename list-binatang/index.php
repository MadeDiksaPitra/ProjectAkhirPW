<?php
include_once("../Controllers/controller_binatang.php");
$controller = new controller_binatang();

$kelas = $_GET["kelas"];

$controller->viewListBinatang($kelas);