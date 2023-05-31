<?php
include('../opt/session.php');
include('../opt/mahasiswa.php');
include("./getData.php");

$nim = $data['nim'];
$nama = $data['nama'];
$prodi = $data['prodi'];
$email = $data['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>indexupdate - Plump Calm Goldfinch</title>
    <meta property="og:title" content="indexupdate - Plump Calm Goldfinch" />
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
        <link href="./indexupdate.css" rel="stylesheet" />

        <div class="indexupdate-container">
            <div class="indexupdate-all-panel">
                <div class="indexupdate-header">
                    <div class="indexupdate-text">
                        <span class="indexupdate-text1">Update Data Mahasiswa</span>
                    </div>
                </div>
                <div class="indexupdate-isi">
                    <div class="indexupdate-text2">
                        <span class="indexupdate-text3">Form Update Data</span>
                    </div>
                    <div class="indexupdate-isian">
                        <form action="./updateData.php" method="post" class="indexupdate-form">
                            <div class="indexupdate-container01">
                                <div class="indexupdate-container02">
                                    <span class="indexupdate-text4">Mahasiswa</span>
                                </div>
                                <div class="indexupdate-container03">
                                    <input type="text" name="no" value="<?php echo $no ?>"
                                        class="indexupdate-textinput input" readonly/>
                                </div>
                            </div>
                            <div class="indexupdate-container04">
                                <div class="indexupdate-container05">
                                    <span class="indexupdate-text5">NIM</span>
                                </div>
                                <div class="indexupdate-container06">
                                    <input type="text" name="nim" placeholder="Masukkan NIM" value="<?php echo $nim ?>"
                                        class="indexupdate-textinput1 input" />
                                </div>
                            </div>
                            <div class="indexupdate-container07">
                                <div class="indexupdate-container08">
                                    <span class="indexupdate-text6">Nama</span>
                                </div>
                                <div class="indexupdate-container09">
                                    <input type="text" name="nama" placeholder="Masukkan Nama"
                                        value="<?php echo $nama ?>" class="indexupdate-textinput2 input" />
                                </div>
                            </div>
                            <div class="indexupdate-container10">
                                <div class="indexupdate-container11">
                                    <span class="indexupdate-text7">Prodi</span>
                                </div>
                                <div class="indexupdate-container12">
                                    <input type="text" name="prodi" placeholder="Masukkan Prodi"
                                        value="<?php echo $prodi ?>" class="indexupdate-textinput3 input" />
                                </div>
                            </div>
                            <div class="indexupdate-container13">
                                <div class="indexupdate-container14">
                                    <span class="indexupdate-text8">Email</span>
                                </div>
                                <div class="indexupdate-container15">
                                    <input type="text" name="email" placeholder="Masukkan Email"
                                        value="<?php echo $email ?>" class="indexupdate-textinput4 input" />
                                </div>
                            </div>
                            <div class="indexupdate-submit">
                                <button name="submit" type="submit" class="indexupdate-button button">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>