<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>ID</p>
    <input type="text" name="email" value="<?php echo $data2["email"] ?>" />

    <p>Fakta Unik</p>
    <input type="text" name="no_telp" value="<?php echo $data2["no_telp"] ?>" />

    <p>Nama</p>
    <input type="text" name="nama" value="<?php echo $data2["nama"] ?>" />

    <p>Kelas</p>
    <input type="text" name="tanggal_lahir" value="<?php echo $data2["tanggal_lahir"] ?>" />

    <p>Kelas</p>
    <input type="text" name="jenis_kelamin" value="<?php echo $data2["jenis_kelamin"] ?>" />

    <p>Kelas</p>
    <input type="text" name="divisi" value="<?php echo $data2["divisi"] ?>" />

    <p></p>

    <table>
        <tr>
            <th>email</th>
            <th>no_telp</th>
            <th>nama</th>
            <th>Hapushabit</th>
        </tr>

        <?php
        foreach ($data as $index) {
            echo "
            <tr>
                <td>$index[email]</td>
                <td>$index[no_telp]</td>
                <td>$index[nama]</td>
                <td>$index[divisi]</td>
            </tr>
        ";
        }
        ?>
    </table>
</body>

</html>