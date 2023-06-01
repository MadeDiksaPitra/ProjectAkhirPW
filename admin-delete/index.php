<?php
include_once("../Controllers/controller_admin.php");

$id = $_GET["id"];

$controller = new controller_admin();
$controller->delete($id);
