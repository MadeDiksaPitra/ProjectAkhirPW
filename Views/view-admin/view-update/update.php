<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../admin-update/index.php" method="post">

        <p>ID</p>
        <input type="text" name="id" placeholder="Masukkan ID" value="<?php echo $data["id"]?>"/>

        <p>Nama</p>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $data["nama"]?>"/>

        <p>Kelas</p>
        <input type="text" name="kelas" placeholder="Masukkan Kelas" value="<?php echo $data["kelas"]?>"/>

        <p>Fakta Unik</p>
        <input type="text" name="fakta_unik" placeholder="Masukkan Fakta Unik" value="<?php echo $data["fakta_unik"]?>"/>

        <p>Keterangan</p>
        <input type="text" name="keterangan" placeholder="Masukkan Keterangan" value="<?php echo $data["keterangan"]?>"/>

        <p>Habitat</p>
        <input type="text" name="habitat" placeholder="Masukkan Habitat" value="<?php echo $data["habitat"]?>"/>

        <p>Makanan</p>
        <input type="text" name="makanan" placeholder="Masukkan Makanan" value="<?php echo $data["makanan"]?>"/>

        <p>Cara Hidup</p>
        <input type="text" name="cara_hidup" placeholder="Masukkan Cara Hidup" value="<?php echo $data["cara_hidup"]?>"/>

        <p>Reproduksi</p>
        <input type="text" name="reproduksi" placeholder="Masukkan Reproduksi" value="<?php echo $data["reproduksi"]?>"/>

        <p>Ancaman</p>
        <input type="text" name="ancaman" placeholder="Masukkan Ancaman" value="<?php echo $data["ancaman"]?>"/>

        <p>Foto Profil</p>
        <!-- <input type="text" name="foto_profil" placeholder="Masukkan Foto Profil" /> -->
        <?php
        echo "
        <input name="foto_profil" type="file" value="<a href='../form-update/?id=" . $index["id"] . "'>"/>
        ";
        ?>


        <p>Foto Halaman</p>
        <!-- <input type="text" name="foto_halaman" placeholder="Masukkan Foto Halaman" /> -->
        <input name="foto_halaman" type="file" />

<a href='../form-update/?id=" . $index["id"] . "'>
        <p>Foto Profil</p>
        <input type="text" name="foto_profil" placeholder="Masukkan Foto Profil" value="<?php echo $data["foto_profil"]?>"/>

        <p>Foto Halaman</p>
        <input type="text" name="foto_halaman" placeholder="Masukkan Foto Halaman" value="<?php echo $data["foto_halaman"]?>"/>

        <p></p>
        <button name="submit" type="submit">
            Tambahkan
        </button>
        
        </div>
    </form>
</body>

</html>