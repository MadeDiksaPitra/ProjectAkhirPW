<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: ../data/");
}

$printErr = "
<div id='login-err' class='index-error'>
    <span class='index-text3'>
        
    </span>
</div>
";

if (isset($_SESSION['temp'])) {
    if ($_SESSION['temp'] == "error") {
        $printErr = "
        <div id='login-err' class='index-error'>
            <span class='index-text3'>
                Maaf, Username atau Password Tidak Ditemukan
            </span>
        </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta property="og:title" content="Plump Calm Goldfinch" /> -->
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
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div>
        <link href="./index.css" rel="stylesheet" />

        <div class="index-container">
            <div class="index-all-panel">
                <div class="index-panel-gambar">
                    <div class="index-gambar">
                        <img alt="image" src="public/playground_assets/login2.svg" class="index-image" />
                    </div>
                </div>
                <div class="index-panel-login">
                    <div class="index-login-text">
                        <span class="index-text">Login</span>
                    </div>
                    <form action="./login.php" method="post" class="index-form">
                        <div class="index-username-text">
                            <span class="index-text1">Username</span>
                        </div>
                        <div class="index-username-input">
                            <input type="text" name="user" placeholder="Masukkan Username" class="index-textinput input" />
                        </div>
                        <div class="index-password-text">
                            <span class="index-text2">Password</span>
                        </div>
                        <div class="index-password-input">
                            <input type="text" name="pass" placeholder="Masukkan Password" class="index-textinput1 input" />
                        </div>
                        <div class="index-submit">
                            <button name="submit" type="submit" class="index-button button">
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
</body>

</html>