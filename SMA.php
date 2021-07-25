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

    <div class="containerSMA">
        <img src="gambar/SMA.jpg">
    </div>    


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
