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
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
        <?php
        include "koneksi.php";
        $result = $mysqli->query("SELECT * FROM datamahasiswa");
        while ($view_tabel = mysqli_fetch_array($result)) {
            echo "<div style=\"text-align:center\">";
            echo "<tr>
            <td>$view_tabel[nim]</td>
            <td>$view_tabel[nama]</td>
            <td>$view_tabel[programstudi]</td>
            <td>$view_tabel[email]</td>";
            echo
            "<td><form method='POST' action='action.php?nim=$view_tabel[nim]'><input id='submit' type='submit' value='Edit'/></form></td>
            <td><form method='POST' action='action1.php?nim=$view_tabel[nim]'><input id='submit' name='delete' onclick=\"show_alert()\" type='submit' value='Delete'/></form></td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>