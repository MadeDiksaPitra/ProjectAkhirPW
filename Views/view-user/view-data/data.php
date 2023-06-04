<!DOCTYPE html>
<html lang="en">
  <head>
    <title>deskripsi - Arctic Avaricious Flamingo</title>
    <meta
      property="og:title"
      content="deskripsi - Arctic Avaricious Flamingo"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="../Views/view-user/view-data/style.css" />
  </head>
  <body>
    <div>
      <link href="../Views/view-user/view-data/data.css" rel="stylesheet" />

      <div class="deskripsi-container">
        <div class="deskripsi-container01">
          <div class="deskripsi-container02">
            <div class="deskripsi-container03">
              <div class="deskripsi-container04">
                <button type="button" class="deskripsi-button buttonn" onclick='window.location.href = "../admin-login"'>
                Login Admin
              </button>
              </div>
            </div>
            <div class="deskripsi-container05"></div>
          </div>
          <div class="deskripsi-container06">
            <div class="deskripsi-container07">
              <div class="deskripsi-container08">
                <img
                <?php
                  $temp = trim($data['foto_halaman']);

                  echo "
                  src=\"../Files/foto_halaman/$temp\"
                  ";
                ?>
                  alt="image"
                  class="deskripsi-image"
                />
              </div>
              <div class="deskripsi-container09">
                <div class="deskripsi-container10">
                  <span class="deskripsi-text"><?php echo $data["nama"] ?></span>
                </div>
                <div class="deskripsi-container11">
                  <span class="deskripsi-text01"><?php echo $data["kelas"] ?></span>
                </div>
                <div class="deskripsi-container12">
                  <span class="deskripsi-text02">
                  <?php echo $data["keterangan"] ?>
                  </span>
                </div>
              </div>
            </div>
            <div class="deskripsi-container13">
              <div class="deskripsi-container14">
                <span class="deskripsi-text03">Fakta Unik</span>
              </div>
              <div class="deskripsi-container15">
                <span class="deskripsi-text04"><?php echo $data["fakta_unik"] ?></span>
              </div>
            </div>
            <div class="deskripsi-container16">
              <div class="deskripsi-container17">
                <div class="deskripsi-container18">
                  <div class="deskripsi-container19">
                    <span class="deskripsi-text05">Habitat</span>
                  </div>
                  <div class="deskripsi-container20">
                    <span class="deskripsi-text06"><?php echo $data["habitat"] ?></span>
                  </div>
                </div>
                <div class="deskripsi-container21">
                  <div class="deskripsi-container22">
                    <div class="deskripsi-container23">
                      <span class="deskripsi-text07">Makanan</span>
                    </div>
                    <div class="deskripsi-container24">
                      <span class="deskripsi-text08">
                      <?php echo $data["makanan"] ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="deskripsi-container25">
                <div class="deskripsi-container26">
                  <div class="deskripsi-container27">
                    <span class="deskripsi-text09">Cara Hidup</span>
                  </div>
                  <div class="deskripsi-container28">
                    <span class="deskripsi-text10">
                    <?php echo $data["cara_hidup"] ?>
                    </span>
                  </div>
                </div>
                <div class="deskripsi-container29">
                  <div class="deskripsi-container30">
                    <div class="deskripsi-container31">
                      <span class="deskripsi-text11">Reproduksi</span>
                    </div>
                    <div class="deskripsi-container32">
                      <span class="deskripsi-text12"><?php echo $data["reproduksi"] ?></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="deskripsi-container33">
                <div class="deskripsi-container34">
                  <div class="deskripsi-container35">
                    <span class="deskripsi-text13">Ancaman</span>
                  </div>
                  <div class="deskripsi-container36">
                    <span class="deskripsi-text14"><?php echo $data["ancaman"] ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
