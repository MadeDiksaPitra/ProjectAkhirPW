<?php
include_once("../mvc/c_data.php");
$controller = new c_data();

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$email = $_POST["email"];

$controller->add($nim, $nama, $prodi, $email);
