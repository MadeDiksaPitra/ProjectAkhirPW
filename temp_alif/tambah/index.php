<?php
include('../opt/session.php');
include('../opt/mahasiswa.php');

$printErr = "";

if (isset($_SESSION['temp'])) {
    $printErr = "
    <div id='login-err' class='indextambah-error'>
        <span class='indextambah-text8'>Data error atau duplikat</span>
    </div>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <title>indextambah - Plump Calm Goldfinch</title> -->
    <meta property="og:title" content="indextambah - Plump Calm Goldfinch" />
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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        data-tag="font" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div>
        <link href="./indextambah.css" rel="stylesheet" />

        <div class="indextambah-container">
            <div class="indextambah-all-panel">
                <div class="indextambah-header">
                    <div class="indextambah-text">
                        <span class="indextambah-text1">Tambah Data Mahasiswa</span>
                    </div>
                </div>
                <div class="indextambah-isi">
                    <div class="indextambah-text2">
                        <span class="indextambah-text3">Form Tambah Data</span>
                    </div>
                    <div class="indextambah-isian">
                        <form action="./tambahData.php" method="post" class="indextambah-form">
                            <div class="indextambah-container01">
                                <div class="indextambah-container02">
                                    <span class="indextambah-text4">NIM</span>
                                </div>
                                <div class="indextambah-container03">
                                    <input type="text" name="nim" placeholder="Masukkan NIM"
                                        class="indextambah-textinput input" />
                                </div>
                            </div>
                            <div class="indextambah-container04">
                                <div class="indextambah-container05">
                                    <span class="indextambah-text5">Nama</span>
                                </div>
                                <div class="indextambah-container06">
                                    <input type="text" name="nama" placeholder="Masukkan Nama"
                                        class="indextambah-textinput1 input" />
                                </div>
                            </div>
                            <div class="indextambah-container07">
                                <div class="indextambah-container08">
                                    <span class="indextambah-text6">Prodi</span>
                                </div>
                                <div class="indextambah-container09">
                                    <input type="text" name="prodi" placeholder="Masukkan Prodi"
                                        class="indextambah-textinput2 input" />
                                </div>
                            </div>
                            <div class="indextambah-container10">
                                <div class="indextambah-container11">
                                    <span class="indextambah-text7">Email</span>
                                </div>
                                <div class="indextambah-container12">
                                    <input type="text" name="email" placeholder="Masukkan Email"
                                        class="indextambah-textinput3 input" />
                                </div>
                            </div>
                            <div class="indextambah-submit">
                                <button name="submit" type="submit" class="indextambah-button button">
                                    Submit
                                </button>
                            </div>
                        </form>


                        <?php
                        echo $printErr;
                        unset($_SESSION['temp']);
                        ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>