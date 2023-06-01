<?php
include_once("../Controllers/controller_binatang.php");
$controller = new controller_binatang();

$id = $_GET["id"];

$controller->viewDeskripsi($id);