<?php
include_once("../Controllers/controller_admin.php");
// session_start();
$controller = new controller_admin();

$email = $_SESSION["email"];

$controller->viewAdmin($email);
