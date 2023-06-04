<?php

include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();

$kelas = $_SESSION['kelas'];

$controller->view($kelas);
