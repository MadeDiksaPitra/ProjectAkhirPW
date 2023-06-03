<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Admin</title>
</head>

<body>

    <form method='post' action='../form-create/'>
        <button type='submit'>
            Tambah Data
        </button>
    </form>

    <table class="tabel">
        <tr>
            <th>foto</th>
            <th>Nama</th>
            <th>id</th>
            <th>kelas</th>
            <!-- <th>fu</th>
            <th>ket</th>
            <th>Hapushabit</th>
            <th>makanan</th>
            <th>cara hidup</th>
            <th>reproduksi</th>
            <th>ancaman</th>
            <th>fp</th>
            <th>fh</th> -->
            
            <th>Edit</th>
            <th>Hapus</th>
        </tr>

        <?php
        foreach ($data as $index) {
            $temp = trim($index['foto_profil']);

            echo "
            <tr>
                <td><img src=\"../Files/foto_profil/$temp\" ></td>
                <td>$index[nama]</td>
                <td>$index[id]</td>
                <td>$index[kelas]</td>
                <td><a href='../form-update/?id=" . $index["id"] . "'>Update</a></td>
                <td><a href='../admin-delete/?id=" . $index["id"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
            </tr>
        ";
        }
        ?>
    </table>
</body>

</html>