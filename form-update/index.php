<?php
include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();

$id = $_GET["id"];
$data = $controller->row($id);

include_once("../Views/view-admin/view-update/update.php");
