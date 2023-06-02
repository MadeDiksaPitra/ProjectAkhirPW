<?php
include_once("../Controllers/controller_admin.php");
// include_once("./");

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
// $foto_profil= $_POST["foto_profil"];
// $foto_halaman= $_POST["foto_halaman"];

$nama1 = $controller->namaFile();


// $targetDir = "uploads/"; // Direktori tujuan untuk menyimpan file yang diunggah
// $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Path lengkap file tujuan

// // Periksa apakah file sudah ada atau belum
// if (file_exists($targetFile)) {
//     echo "File already exists.";
// } else {
//     // Coba upload file
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//         echo "File uploaded successfully.";
//     } else {
//         echo "Error uploading file.";
//     }
// }


$target_path1 = "../Files/foto_profil";
$target_path1 = $target_path1 . basename($_FILES['foto_profil']['name']);
// move_uploaded_file($_FILES['foto_profil']['tmp_name'],$target_path1);

$nama2 = $controller->namaFile();

$target_path2 = "../Files/foto_halaman";
$target_path2 = $target_path2 . basename($_FILES['foto_halaman']['name']);

$controller->add($id, $nama, $kelas, $fakta_unik, $keterangan, $habitat, $makanan, $cara_hidup, $reproduksi, $ancaman, $nama1, $nama2);
