<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form enctype="multipart/form-data" action="../admin-create/index.php" method="post">

        <p>ID</p>
        <input type="text" name="id" placeholder="Masukkan ID" />

        <p>Nama</p>
        <input type="text" name="nama" placeholder="Masukkan Nama" />

        <p>Kelas</p>
        <input type="text" name="kelas" placeholder="Masukkan Kelas" />

        <p>Fakta Unik</p>
        <input type="text" name="fakta_unik" placeholder="Masukkan Fakta Unik" />

        <p>Keterangan</p>
        <input type="text" name="keterangan" placeholder="Masukkan Keterangan" />

        <p>Habitat</p>
        <input type="text" name="habitat" placeholder="Masukkan Habitat" />

        <p>Makanan</p>
        <input type="text" name="makanan" placeholder="Masukkan Makanan" />

        <p>Cara Hidup</p>
        <input type="text" name="cara_hidup" placeholder="Masukkan Cara Hidup" />

        <p>Reproduksi</p>
        <input type="text" name="reproduksi" placeholder="Masukkan Reproduksi" />

        <p>Ancaman</p>
        <input type="text" name="ancaman" placeholder="Masukkan Ancaman" />

        <p>Foto Profil</p>
        <input name="foto_profil" type="file" />

        <p>Foto Halaman</p>
        <input name="foto_halaman" type="file" />

        <p></p>
        <button name="submit" type="submit">
            Tambahkan
        </button>
        
        </div>
    </form>
</body>

</html>