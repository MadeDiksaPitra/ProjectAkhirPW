<?php
session_start();
include_once("../mvc/c_data.php");
$controller = new c_data();
$controller->invoke();
