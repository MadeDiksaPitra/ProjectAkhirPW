<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Admin</title>
</head>

<body>
    <table class="tabel">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>kelas</th>
            <th>fu</th>
            <th>ket</th>
            <th>Hapushabit</th>
            <th>makanan</th>
            <th>cara hidup</th>
            <th>reproduksi</th>
            <th>ancaman</th>
            <th>fp</th>
            <th>fh</th>
        </tr>

        <?php
        foreach ($data as $index) {
            echo "
            <tr>
                <td>$index[id]</td>
                <td>$index[nama]</td>
                <td>$index[fakta_unik]</td>
                <td>$index[keterangan]</td>
                <td>$index[habitat]</td>
                <td>$index[makanan]</td>
                <td>$index[cara_hidup]</td>
                <td>$index[reproduksi]</td>
                <td>$index[ancaman]</td>
                <td>$index[foto_profil]</td>
                <td>$index[foto_halaman]</td>
            </tr>
        ";
        }
        ?>
    </table>
</body>

</html>