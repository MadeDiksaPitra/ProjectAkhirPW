<!DOCTYPE html>
<html lang="en">

<head>
  <title>list - Arctic Avaricious Flamingo</title>
  <meta property="og:title" content="list - Arctic Avaricious Flamingo" />
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="../Views/view-user/view-list/style.css" />
</head>

<body>
  <div>
    <link href="../Views/view-user/view-list/list.css" rel="stylesheet" />

    <div class="list-container">
      <div class="list-container01">
        <div class="list-container02">
          <div class="list-container03">
            <div class="list-container04">
              <button type="button" class="list-button button" onclick='window.location.href = "../admin-login/logout.php"'>
                Login Admin
              </button>
            </div>
          </div>
          <div class="list-container05"></div>
        </div>
        <div class="list-container06">
          <div class="list-container07">
            <span class="list-text">
              <span class="list-text01">List</span>
              <br class="list-text02" />
              <span class="list-text03">Hewan</span>
            </span>
            <div class="list-container08"></div>
            <div class="list-container09"></div>
          </div>
          <div class="list-container10">
            <div class="list-container11">

              <?php
              $count = 0;
              foreach ($data as $index) {
                $temp = trim($index['foto_profil']);
                if ($count % 4 == 0) {
                  echo "<div class=\"list-container12\">"; // Mulai baris baru setiap 4 data
                }
                echo "                  
                <div id=\"$index[id]\" class=\"list-container13\">

                <script>
                document.getElementById(\"$index[id]\").addEventListener(\"click\", function() {
                  window.location.href = \"/ProjectAkhirPW/deskripsi/?id=$index[id]\"
                });
              </script>

                <div class=\"list-container14\">
                  <img
                    src=\"../Files/foto_profil/$temp\"
                    alt=\"Rectangle112233\"
                    class=\"list-rectangle11\"
                  />
                </div>
                
                <div class=\"list-container15\">
                  <span class=\"list-text04\"><span>$index[nama]</span></span>
                </div>
              </div>
              <div class=\"list-container16\"></div>";
              
                $count++;
                if ($count % 4 == 0) {
                  echo "
                  </div>
                  ";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>