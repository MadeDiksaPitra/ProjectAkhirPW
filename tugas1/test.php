<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1 solid black">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php for($row = 1; $row <= 10; $row++): ?>
            <tr>
                <?php for($column = 1; $column <= 6; $column++): ?>
                    <?php if($column == 1): ?>
                        <td><?php echo "$row"; ?></td>
                    <?php elseif($column == 6): ?>
                        <td>
                            <?php echo '<form method="POST" action="edit.php"><input type="submit" value="Edit"/></form>';?>
                            <?php echo '<form method="POST" action="delete.php"><input type="submit" value="Delete"/></form>';?>
                        </td>
                    <?php else:?>
                        <td><?php echo "data $row, $column"; ?></td>
                    <?php endif;?>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>