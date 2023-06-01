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
        </tr>

        <?php
        foreach ($data as $index) {
            echo "
            <tr>
                <a href='../deskripsi/?id=" . $index["id"] . "'>
                    <td>$index[nama]</td>
                    <td>$index[foto_profil]</td>
                </a>
            </tr>
        ";
        }
        ?>
    </table>
</body>

</html>