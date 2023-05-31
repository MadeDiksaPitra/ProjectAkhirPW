<?php 
include_once("../mvc/m_data.php");

$model = new m_data();

for ($i=1; $i <= 10; $i++) { 
    $nim = "data ".$i.", 2";
    $nama = "data ".$i.", 3";
    $prodi = "data ".$i.", 4";
    $email = "data ".$i.", 5";
    $model->setData($nim, $nama, $prodi, $email);
}

echo "Data sudah terisi";
?>