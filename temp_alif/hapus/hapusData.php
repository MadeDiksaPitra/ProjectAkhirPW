<?php
include_once("../mvc/c_data.php");
$controller = new c_data();

$no = $_GET["no"];
$controller->delete($no);