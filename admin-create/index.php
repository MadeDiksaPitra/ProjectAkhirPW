<?php
include_once("../Controllers/controller_admin.php");
$controller = new controller_admin();

$id = $_POST["id"];
$nama = $_POST["nama"];
$kelas= $_POST["kelas"];
$fakta_unik= $_POST["fakta_unik"];
$keterangan= $_POST["keterangan"];
$habitat= $_POST["habitat"];
$makanan= $_POST["makanan"];
$cara_hidup= $_POST["cara_hidup"];
$reproduksi= $_POST["reproduksi"];
$ancaman= $_POST["ancaman"];
$foto_profil= $_POST["foto_profil"];
$foto_halaman= $_POST["foto_halaman"];

$controller->add($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $foto_profil, $foto_halaman);
