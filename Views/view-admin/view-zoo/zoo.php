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
        echo "<tr>
            <td>$data[nim]</td>
            <td>$data[nama]</td>
            <td>$data[programstudi]</td>
            <td>$data[email]</td>
            </tr>";
        ?>
    </table>
</body>

</html>