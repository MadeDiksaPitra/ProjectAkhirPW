<html>

<head>
    <link rel="stylesheet" href="style.php" media="screen">
    <script>
        function show_alert() {
            if (confirm("Apakah yakin ingin menghapus data?")) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body>
    <br>
    <h2 class=".header">Data Mahasiswa</h2>
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
    <br>
    <div class="bottom">
    <form action="action.php" method="post">
        <input id="submit" class=".center" type="submit" name="create" value="Tambah Data">
    </form>
    <br>
    <form action="logout.php" method="post">
        <input id="submit" class=".center" type="submit" value="Keluar" name="submit">
    </form>
    </div>
</body>

</html>