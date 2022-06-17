<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <!-- Css -->
    <link rel="stylesheet" href="style.css" />
    <title>Praktikum 10</title>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <div>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(0, 150, 125)">
        <div class="container">
          <a class="navbar-brand" href="#">Ian Oktafian</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir Navbar -->
      <div style="background-color: rgb(43, 204, 177)">
        <h1 class="text-center">Biografi</h1>
        <p class="text-left ">
          <?php 

          $file_counter = "counter.txt";
          $f_open = fopen($file_counter,"r+");
          $hitung = fread($f_open,filesize($file_counter));
          echo "Selamat Datang Anda adalah pengunjung ke : ".$hitung;
          fclose($f_open);

          $f_open = fopen($file_counter,"w+");
          $hitung = $hitung +1;
          fwrite($f_open,$hitung,strlen($hitung));
          fclose($f_open);
          ?>

        </p>
      </div>      
    </div>
    <!-- Konten -->
    <section id="profile">
      <div class="container shadow">
        <div class="row">
          <div class="col-3 border bcolor text-center">
            <img src="img/uad.jpg" alt="UAD" width="250" class="padding" />
            <h2z>UAD</h2z>
            <p>
              Universitas Ahmad Dahlan adalah sebuah perguruan tinggi swasta di Yogyakarta, Indonesia yang didirikan pada 
              tanggal 18 November 1960<br />Alamat: Jl. Kapas No.9, Semaki, Kec. Umbulharjo, Kota Yogyakarta, 
              Daerah Istimewa Yogyakarta 55166<br />
              Telepon: (0274) 563515<br />
              Rektor: Dr. Muchlas, M.T<br />
              Didirikan: 19 Desember 1994<br />
              Provinsi: Daerah Istimewa Yogyakarta<br />
            </p>
          </div>
          <div class="col">
            <!-- Jumbotron -->
            <section class="jumbotron text-center">
              <img src="img/my.jpeg" alt="Its Me" width="200" class="rounded-circle img-thumbnail" />
              <h1 class="display-4 ">Biografi Ian Oktafian</h1>
              <p class="lead">Saya merupakan mahasiswa teknik informatika UAD angkatan 2020</p>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                  fill="#f3f4f5"
                  fill-opacity="1"
                  d="M0,128L48,122.7C96,117,192,107,288,90.7C384,75,480,53,576,58.7C672,64,768,96,864,96C960,96,1056,64,1152,53.3C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
                ></path>
              </svg>
            </section>
            <!-- Akhir Jumbotron -->
            <h2 class="text-center">Welcome To My Web</h2>
            <p>
              At this time, introduce my name IAN OKTAFIAN PURNOMOSIDI from the Informaika Engineering study program, 
              Faculty of Industrial Technology, Ahmad Dahlan University. I am the first of 2 siblings. 
              I was born in Kebummen on October 7, 2001. My younger brother named Muhamad Sayid Candivas is 17 years old , 
              he was in high school at the same school as me.
            </p>
          </div>
          <div class="col-3 border bcolor">
            <h2>Keahlian</h2>
            <p>-Ngoding <br />-Editing <br />-Photograp</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Konten -->
    <br />
    <!-- Guestbook -->
    <table widht="64%" border="2" align="center" class="ncolor">
    <tr><td>
    <div align="center"><strong><font size="3" face="Courier New,Courier,mono">Buku Tamu</font></strong></div>
    <form name="form1" method="post" action="proses.php">
        <table widht="58%" border="1" align="center" class="bcolor">
        <tr>
            <td>Nama Lengkap</td>
            <td><input name="nama" type="text" id="nama"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input name="alamat" type="text" id="alamat"></td>
        </tr>

        <tr>
            <td>E-Mail</td>
            <td><input name="email" type="text" id="email"></td>
        </tr>

        <tr>
            <td>Status</td>
            <td><select name="status" id="status">
            <option value="menikah">Menikah</option>
            <option value="single">Single</option>
            </select></td>
        </tr>

        <tr>
            <td>Komentar</td>
            <td><textarea name="komentar" id="komentar"></textarea></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Kirim"><input type="reset" name="submit2" value="Batal"></td>
        </tr>
        </table>
    </form>
    </td></tr>
    </table>
    <div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu:: </a></strong></div>
    </body>    
    <!-- Akhir Guestbook -->
    <!-- Upload File -->
    <form enctype="multipart/form-data" method="post" action="upload.php">
    <table widht="58%" border="1" align="center" class="bcolor">
    <tr><td>
    Upload File : <input type="file" name="fupload" ><br>
    </td>
    <td>
    Deskripsi file  :<br><textarea name="deskripsi" rows="6" cols="20"></textarea><br>
    <input type="submit" value="Upload">
    </td></tr>
    </table>
    </form>
    <br><br>
    <!-- Akhir Upload File -->
    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <p class="bcolor text-center">
              Dunia Percodingan<br />
              Salam Sejahtera
            </p>
          </div>
          <div class="col-6">
            <p class="text-center bcolor">
              Instagram <a href="https://www.instagram.com/ianokt0/">Ianokt0</a> <br />
              Facebook <a href="https://www.facebook.com/naifatko/">Ian Oktafian</a>
            </p>
            <br />
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Footer -->
  </body>
</html>
