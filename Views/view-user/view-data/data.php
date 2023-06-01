<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($data as $index) {
        echo "
            <tr>
                <td>$index[id]</a></td>
                <td>$index[nama]</td>
                <td>$index[kelas]</a></td>
                <td>$index[fakta_unik]</td>
                <td>$index[keterangan]</a></td>
                <td>$index[habitat]</a></td>
                <td>$index[makanan]</td>
                <td>$index[cara_hidup]</a></td>
                <td>$index[reproduksi]</td>
                <td>$index[ancaman]</a></td>
                <td>$index[foto_profil]</td>
                <td>$index[foto_halaman]</td>
            </tr>
        ";
    }
    ?>
</body>

</html>