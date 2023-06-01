<?php
include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();

// $email = $_SESSION["email"];
$email = "test@gmail.com";

$controller->viewAdmin($email);
