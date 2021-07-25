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

    <div class="containerguest">
      <div class="dropdown-guest-menu">
        <h1 class="headerguest">This is Guestbook</h1>
        <ul>
              <li><a href="lihat.php">
                <span class="icon"><ion-icon name="bookmarks-outline"></ion-icon></span>
                <span>Kunjungi Buku Tamu</span>
              </a></li>
        </ul>
      </div>
    </div>
        
    <div class="guestbook">
          <h2>Guestbook</h2>
          
            <form method="post" action="proses.php">
              <div class="guest">
                <input type="text" name="nama" id="nama" placeholder="Nama" required="">
              </div>

              <div class="guest">
                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required="">
              </div>

              <div class="guest">
                <input type="text" name="email" id="email" placeholder="email"required="">
              </div>

              <div class="guest">
                <textarea name="komentar" id="komentar" placeholder="Komentar" required=""></textarea>
              </div>

              <div class="guest">
                <input type="submit" name="Submit" value="Kirim">
                <input type="reset" name="Submit2" value="Batal">
              </div>			
            
            </form>

    </div>

    <div class="contentguest">
      <h2>Apa itu Guestbook?</h2>
      <p>Arti istilah guestbook apabila diterjemahkan dalam bahasa indonesia artinya yaitu buku tamu. 
        Dalam dunia internet guestbook biasanya disebut dengan buku tamu On-line. 
        Jadi guestbook adalah fasilitas interaktif dalam sebuah web yang memungkinkan pengunjungnya menulis pesan, 
        mengirim pesan, dan membaca pesan dari pengunjung lain, dengan kata lain yaitu mendata pengunjung situs yang mengisi buku tamu. 
        Dengan guestbook ini pengunjung bisa menuliskan namanya, alamat e-mailnya dan juga alamat situs homepagenya (jika punya). 
        Tidak hanya itu saja pengunjung juga dapat memberikan komentar terhadap homepage situs yang dikunjungi, 
        contohnya kritik dan saran atau bagian mana yang masih kurang dan bagian mana yang menarik.</p>
    </div>

    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
