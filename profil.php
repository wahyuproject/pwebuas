<?php
  require'function.php';
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Pemrograman Web UAS</title>
  </head>
  <body>
    <div class="menu-bar">
      <h1 class="logo">Wahyu<span>Code.</span></h1>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="profil.php">Profile</a></li>
        <li><a href="#">Pages <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                  <li><a href="guestbook.php">Guestbook</a></li>
                  <li><a href="biografi.php">Biografi</a></li>
                  <li>
                    <a href="#">Team Bola<i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                      <li><a href="pebatae.php">PEBATAE FC</a></li>
                        <li><a href="SMA.php">SMAN 1 BUMI RAYA FC</a></li>
                        <li><a href="kumpa.php">KUMPA FC</a></li>
                        <li><a href="bulog.php">BULOG FC</a></li>
                        <li><a href="uad.php">UNIVERSITAS AHMAD DAHLAN FC</a></li>
                      </ul>
                    </div>
                  </li>
                 
                </ul>
              </div>
        </li>
        <li><a href="https://130wahyu.blogspot.com/ " target="_blank">Blog</a>
        </li>
        <li>
            <a href="logout.php">
            <span>Sign Out</span>
            </a>

        </li>
      </ul>
    </div>

    <div class="containerprofil">
        <div class="drop-down-menu">
          <h1 class="headerprofil">Welcome Guys</h1>
                <ul>
                  <li><a href="https://www.instagram.com/wai.yuuu/" target="_blank">
                    <span class="icon"><ion-icon name="logo-instagram"></ion-icon></span>
                    <span>Instagram</span>
                  </a></li>
                  
                  <li><a href="https://www.facebook.com/profile.php?" target="_blank">
                    <span class="icon"><ion-icon name="logo-facebook"></ion-icon></span>
                    <span>Facebook</span>
                  </a></li>
                  
                  <li><a href="#" onclick="myFunction()">
                    <span class="icon"><ion-icon name="logo-whatsapp"></ion-icon></span>
                    <span>Whatsapp</span>
                          <script>
                          function myFunction() {
                            alert("Hello!\nMaaf Private hehe!");
                          }
                          </script>
                  </a></li>

                  <li><a href="https://www.youtube.com/channel/UC7vWFy8pMC2eXCQ_oD3zOvg" target="_blank">
                    <span class="icon"><ion-icon name="logo-youtube"></ion-icon></span>
                    <span>Youtube</span>
                  </a></li>
                </ul>
        </div>
    </div>
    
    <div class="profil">
      <table class="tabel" cellspacing="0px">
        <tr>
          <td>Nama</td>
          <td>Wahyu</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>06 November 2001</td>
        </tr>
        <tr>
          <td>Umur</td>
          <td>19 tahun</td>
        </tr>
        <tr>
          <td>Tempat</td>
          <td>Pebatae, Bumi Raya , Sulawesi Tengah </td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td>Sepak Bola</td>
        </tr>
        <tr>
          <td>Pendidikan</td>
          <td>S1 Teknik Informatika</td>
        </tr>
      </table>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
