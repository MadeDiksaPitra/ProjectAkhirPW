<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" href="style.php" media="screen">
</head>
<body>
<div class="center">
	<form action="action1.php" method="post">
		<?php
		if (isset($_GET['nim'])) {
			include "koneksi.php";
			$rs = $mysqli->query("SELECT * FROM datamahasiswa WHERE nim='$_GET[nim]'");
			$data = mysqli_fetch_array($rs);
			echo '<h2 class=".header">Ubah Data Mahasiswa</h2><input type="hidden" name="h_edit" value="1"';
		} else {
			echo '<h2 class=".header">Tambah Data Mahasiswa</h2><input type="hidden" name="h_create" value="2"';
		}
		?>
		<div class="center1">
		<p>NIM </p>
		<input type="text" class="form-control" name="nim" value="

<?php
if (isset($data['nim'])) echo $data['nim']; ?>" required><br>
		<p>Nama</p>
		<input type="text" class="form-control" name="nama" value="

<?php
if (isset($data['nama'])) echo $data['nama']; ?>" required><br>
		<p>Program Studi</p>
		<input type="text" class="form-control" name="programstudi" value="


<?php
if (isset($data['programstudi'])) echo $data['programstudi']; ?>" required><br>
		<p>Email</p>
		<input type="text" class="form-control" name="email" value="

<?php
if (isset($data['email'])) echo $data['email']; ?>" required><br><br>

<?php
		if (isset($_GET['nim'])) {
			echo '<input id="submit" type="submit" name="edit" value="Simpan">';
		} else {
			echo '<input id="submit" class type="submit" name="create" value="Simpan">';
		}
		?>
		</div>
	</form>
	</div>
</body>
</html>