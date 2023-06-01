<?php
// session_start();
include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();
// $controller->cekSession();
$controller->view();
