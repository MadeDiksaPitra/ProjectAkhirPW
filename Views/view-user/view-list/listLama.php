<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Admin</title>
</head>

<body>
    <h2>List Hewan</h2>
    <table class="tabel">
        <tr>
            <th>id</th>
            <th>Nama</th>
        </tr>

        <?php
        // foreach ($data as $index) {
        //     echo "
        //     <tr>
        //         <td><a href='../deskripsi/?id=" . $index["id"] . "'>$index[nama]</a></td>
        //         <td>$index[foto_profil]</td>
        //     </tr>
        // ";
        // }
        
        $count = 0;
        foreach ($data as $value) {
            if ($count % 4 == 0) {
                echo "<tr>"; // Mulai baris baru setiap 4 data
            }
            echo "<td><a href='../deskripsi/?id=" . $value["id"] . "'>$value[nama]</a></td>"; // Masukkan data ke dalam sel tabel
            echo "<td>$value[foto_profil]</td>";
            $count++;
            if ($count % 4 == 0) {
                echo "</tr>"; // Selesaikan baris setelah 4 data
            }
        }

        ?>
    </table>
</body>

</html>