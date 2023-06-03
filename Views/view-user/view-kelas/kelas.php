<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Hewan</title>
</head>

<body>
    <h2>Jenis Hewan</h2>
    <a href="./list-binatang?kelas=Mamalia" class="kolom-klik">
        <?php
        // Variabel dengan teks yang akan ditampilkan
        $teks = "Mamalia merupakan bla bla bla";
        ?>


        <h1>Mamalia</h1>
        <p>
            <?php echo $teks; ?>
        </p>
    </a>

    <a href="./list-binatang?kelas=Aves" class="kolom-klik">
        <?php
        // Variabel dengan teks yang akan ditampilkan
        $teks = "Aves merupakan bla sajsadsd";
        ?>

        <h1>Aves</h1>
        <p>
            <?php echo $teks; ?>
        </p>
    </a>

    <a href="./list-binatang?kelas=Reptilia" class="kolom-klik">
        <?php
        // Variabel dengan teks yang akan ditampilkan
        $teks = "Reptilia merupakan hewan yang";
        ?>

        <h1>Reptilia</h1>
        <p>
            <?php echo $teks; ?>
        </p>
    </a>

    <a href="./list-binatang?kelas=Pisces" class="kolom-klik">
        <?php
        // Variabel dengan teks yang akan ditampilkan
        $teks = "Pisces merupakan ikan";
        ?>

        <h1>Pisces</h1>
        <p>
            <?php echo $teks; ?>
        </p>
    </a>
</body>

</html>