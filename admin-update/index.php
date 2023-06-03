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

$nama1 = $controller->namaFile();
$target_path1 = "../Files/foto_profil/";
$fileExt = pathinfo($_FILES['foto_profil']['name'], PATHINFO_EXTENSION);
$target_path1 = $target_path1 . $nama1 . "." . $fileExt;
move_uploaded_file($_FILES['foto_profil']['tmp_name'],$target_path1);
$profil_path = $nama1 . "." . $fileExt;

$nama2 = $controller->namaFile();
$target_path2 = "../Files/foto_halaman/";
$fileExt2 = pathinfo($_FILES['foto_halaman']['name'], PATHINFO_EXTENSION);
$target_path2 = $target_path2 . $nama2 . "." . $fileExt2;
move_uploaded_file($_FILES['foto_halaman']['tmp_name'],$target_path2);
$halaman_path = $nama2 . "." . $fileExt2;

$controller->update($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, trim($profil_path), trim($halaman_path));
