<?php
include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();

$email = $_POST["email"];

$controller->viewAdmin($email);
