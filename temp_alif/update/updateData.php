<?php
include_once("../mvc/c_data.php");
$controller = new c_data();

$no = $_POST["no"];
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$email = $_POST["email"];
$controller->update($no, $nim, $nama, $prodi, $email);