<!DOCTYPE html>
<html lang="en">

<head>
  <title>crud - Arctic Avaricious Flamingo</title>
  <meta property="og:title" content="crud - Arctic Avaricious Flamingo" />
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
  <link rel="stylesheet" href="../Views/view-admin/view-zoo/style.css" />
</head>

<body>
  <div>
    <link href="../Views/view-admin/view-zoo/crud.css" rel="stylesheet" />

    <div class="crud-container">
      <div class="crud-container01">
        <div class="crud-container02">
          <div class="crud-container03">
            <div class="crud-text">
              <span class="crud-text01">Zoomwah</span>
            </div>
          </div>
          <div class="crud-container04">
            <div class="crud-divcrud">

              <div id="myButton" class="crud-nav-item button">

                <script>
                  document.getElementById("myButton").addEventListener("click", function() {
                    // Perform the desired action when the button is clicked
                    window.location.href = "../admin-zoo"
                  });
                </script>

                <div class="crud-leading-icon-nav-link">
                  <div class="crud-leading-icon">
                    <div class="crud-home">
                      <div class="crud-iconly-bold-home">
                        <div class="crud-home1">
                          <div class="crud-iconly-bold-home1">
                            <div class="crud-home2">
                              <img src="../Views/view-admin/view-zoo/public/external/vector6821-iag7o.svg" alt="Vector6821" class="crud-vector" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="crud-nav-link">
                    <span class="crud-text02">Zoo CRUD</span>
                  </div>
                </div>
              </div>

            </div>
            <div class="crud-divprofile">
              <form class="crud-form1">
                <div id="myButton1" class="crud-nav-item1 button">

                  <script>
                    document.getElementById("myButton1").addEventListener("click", function() {
                      // Perform the desired action when the button is clicked
                      window.location.href = "../admin-profile"
                    });
                  </script>

                  <div class="crud-leading-icon-nav-link1">
                    <div class="crud-leading-icon1">
                      <img src="../Views/view-admin/view-zoo/public/external/userfill2223-66t.svg" alt="Userfill2223" class="crud-userfill" />
                    </div>
                    <div class="crud-nav-link1">
                      <span class="crud-text03">Profile</span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="crud-container05"></div>
            <div class="crud-divlogout">
              <div class="crud-logout-toogle">
                <form class="crud-form2">
                  <div class="crud-nav-item2 button">
                    <div class="crud-leading-icon-nav-link2">
                      <div class="crud-leading-icon2">
                        <div class="crud-home3">
                          <div class="crud-iconly-bold-home2">
                            <div class="crud-home4">
                              <img alt="VectorI802" src="../Views/view-admin/view-zoo/public/external/vectori802-pbm.svg" class="crud-vector1" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="crud-nav-link2">
                        <span class="crud-text04"><span>Logout</span></span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="crud-container06"></div>
        <div class="crud-container07">
          <div class="crud-container08"></div>
          <div class="crud-container09">
            <div class="crud-container10">
              <span class="crud-text06">CRUD</span>
              <div class="crud-container11">

                <script>
                  function create() {
                    window.location.href = "../Views/view-admin/view-create/create.php";
                  }
                </script>

                <button class="crud-button button" onclick="create()">
                  <span class="crud-text07">Tambah Data</span>
                </button>
              </div>
            </div>
            <div class="crud-container12">
              <div class="crud-tabel">
                <div class="crud-baris">
                  <div class="crud-container13">
                    <span class="crud-text08">Foto</span>
                  </div>
                  <div class="crud-container14">
                    <span class="crud-text09">Nama</span>
                  </div>
                  <div class="crud-container15">
                    <span class="crud-text10">ID</span>
                  </div>
                  <div class="crud-container16">
                    <span class="crud-text11">Kelas</span>
                  </div>
                  <div class="crud-container17">
                    <span class="crud-text12">Edit</span>
                  </div>
                </div>
                <div class="crud-container18"></div>



                <?php
                foreach ($data as $index) {
                  $temp = trim($index['foto_profil']);

                  echo "
    

            

                <div class=\"crud-baris1\">

                

                  <div class=\"crud-container19\">
                    <div class=\"crud-container20\">
                      <img src=\"../Files/foto_profil/$temp\" alt=\"image\" class=\"crud-image\" />
                    </div>
                  </div>
                  <div class=\"crud-container21\">
                    <span class=\"crud-text13\">$index[nama]</span>
                  </div>
                  <div class=\"crud-container22\">
                    <span class=\"crud-text14\">$index[id]</span>
                  </div>
                  <div class=\"crud-container23\">
                    <span class=\"crud-text15\">$index[kelas]</span>
                  </div>
                  <div class=\"crud-container24\">

                  

                    <button id=\"update1\" class=\"crud-button1 button\" >
                      <span class=\"crud-text16\">Update</span>
                    </button>

                    <script>
                      document.getElementById(\"update1\").addEventListener(\"click\", function() {
                        window.location.href = \"../form-update/?id=$index[id]\"
                      });
                    </script>

                  </div>
                  <div class=\"crud-container25\">

                  <script>
                  function delete() {
                    window.location.href = \"../admin-delete/?id=" . $index["id"] . "\";
                  }
                  </script>

                    <button class=\"crud-button2 button\" onclick=\"delete()\">
                      <span class=\"crud-text17\">Delete</span>
                    </button>
                  </div>
                </div>

                ";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>