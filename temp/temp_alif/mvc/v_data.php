<?php
function printTableAdmin($data)
{
    echo "
    <table>
        <tr>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Prodi</td>
            <td>Email</td>
            <td colspan='2'>Edit</td>
        </tr>
    ";

    $nomor = 1;
    foreach ($data as $index) {
        echo "
            <tr>
                <td>$nomor</td>
                <td>$index[nim]</td>
                <td>$index[nama]</td>
                <td>$index[prodi]</td>
                <td>$index[email]</td>
                <td><a href='../update/index.php?no=" . $index["nim"] . "'>Update</a></td>
                <td><a href='../hapus/hapusData.php?no=" . $index["nim"] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>
            </tr>
        ";

        $nomor++;
    }

    echo "
    </table>
    ";
}

function tambahData()
{
    echo "
        <form method='post' action='../tambah/' class='vdata-form1'>
            <button type='submit' class='vdata-button1 button'>
                Tambah Data
            </button>
        </form>
    ";
}

function login()
{
    echo "
        <form method='post' action='../login/' class='vdata-form'>
            <button type='submit' class='vdata-button button'>
                Login Admin
            </button>
        </form>
    ";
}

function logout()
{
    echo "
        <form method='post' action='../logout/logout.php' class='vdata-form'>
            <button type='submit' class='vdata-button button'>
                Logout
            </button>
        </form>
    ";
}

function printTableMenteri($data)
{
    echo "
    <table>
        <tr>
            <td>No</td>
            <td>Nim</td>
            <td>Nama</td>
            <td>Prodi</td>
            <td>Email</td>
        </tr>
    ";

    $nomor = 1;
    foreach ($data as $index) {
        echo "
            <tr>
                <td>$nomor</td>
                <td>$index[nim]</td>
                <td>$index[nama]</td>
                <td>$index[prodi]</td>
                <td>$index[email]</td>
            </tr>
        ";

        $nomor++;
    }

    echo "
    </table>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>vdata - Plump Calm Goldfinch</title>
    <meta property="og:title" content="vdata - Plump Calm Goldfinch" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focus,
        [type="button"]:-moz-focus,
        [type="reset"]:-moz-focus,
        [type="submit"]:-moz-focus {
            outline: 1px dotted ButtonText;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-family: Inter;
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);

        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="../mvc/style.css" />
    <link rel="stylesheet" href="../mvc/table.css">
</head>

<body>
    <div>
        <link href="../mvc/vdata.css" rel="stylesheet" />

        <div class="vdata-container">
            <div class="vdata-all-panel">
                <div class="vdata-header">
                    <div class="vdata-text">
                        <span class="vdata-text1">Portal Data Mahasiswa</span>
                    </div>
                    <div class="vdata-login">

                        <?php
                        if (isset($_SESSION["username"])) {
                            logout();
                        } else {
                            login();
                        }
                        ?>


                    </div>
                </div>
                <div class="vdata-isi">
                    <div class="vdata-atas">
                        <div class="vdata-text2">
                            <span class="vdata-text3">Tabel Data Mahasiswa</span>
                        </div>
                        <div class="vdata-menu">


                            <?php
                            if (isset($_SESSION["username"])) {
                                tambahData();
                            }
                            ?>


                        </div>
                    </div>


                    <div class="vdata-tabel">

                        <?php
                        if (isset($_SESSION["username"])) {
                            printTableAdmin($data);
                        } else {
                            printTableMenteri($data);
                        }
                        ?>

                    </div>


                </div>
            </div>
        </div>
    </div>
</body>

</html>