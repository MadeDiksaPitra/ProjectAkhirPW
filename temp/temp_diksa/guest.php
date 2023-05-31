<html>

<head>
    <link rel="stylesheet" href="style.php" media="screen">
</head>

<body>
    <h2 id="guest_header" class=".header">Data Mahasiswa</h2>
    <table class="tabel">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Email</th>
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
            <td>$view_tabel[email]</td>
            </tr>";
        }
        ?>

    </table> <br> <br>
    <div class="bottom">
        <form action="logout.php" method="post">
            <input id="submit" type="submit" value="Kembali ke Halaman Login" name="submit">
        </form>
    </div>
</body>

</html>