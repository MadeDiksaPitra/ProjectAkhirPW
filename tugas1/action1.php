<?php
require "koneksi.php";
require "controller.php";

$datamhs = new model();

if (isset($_POST['create'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$programstudi = $_POST['programstudi'];
	$email = $_POST['email'];
	$result = $datamhs->setDataMahasiswa($nim, $nama, $programstudi, $email);

	include 'index.php';
}
if (isset($_POST['edit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$programstudi = $_POST['programstudi'];
	$email = $_POST['email'];

	$result = $datamhs->editDataMahasiswa($nim, $nama, $programstudi, $email);
	include 'index.php';
}

if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];

	$result = $datamhs->deleteDataMahasiswa($nim);
	include 'index.php';
}
