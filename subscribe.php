<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subscribe!</title>
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/subscribe.css">
</head>

<body>
<header>
        <ul>
            <li><a href="project.html" class="button">Beranda</a></li>
            <li><a href="tentang-kami.php" class="button">Tentang Kami</a></li>
            <li><a href="pakaian adat.php" class="button open">Baju Adat</a></li>
            <li><a href="rumahAdat.php" class="button">Rumah Tradisional</a></li>
            <li><a href="tari-tradisional.php" class="button">Tari Tradisional</a></li>
            <li><a href="data-budaya.php" class="button">Data Budaya</a></li>
            <?php
            session_start();
            if(isset($_SESSION['admin'])){
                echo("<li><a href='' class='button'>Profil</a></li>");
                echo("<li><a href='logout.php'><img class='out' src='img/out.png' alt='logout'></a></li>");
            }else{
                echo(' <li><a href="subscribe.php" class="button">SUBSCRIBE</a></li>');
                    echo("<li><a href='login.php' class='button'>LOGIN</a></li>");
                }
            ?>
        </ul>
    </header>
    
  <div class="container">
    <div class="wrapper">
      <h1>Selamat Datang di Website Kami</h1>
      <p>Dapatkan berita update dengan bergabung di Website ini!</p>
      <p>

      <div class="inputbox">
        <form id="subscribe-form">
          <input type="email" id="subscribe-input" placeholder="Masukkan alamat email Anda" required>
          <button type="submit" id="subscribe-button">Subscribe</button>
        </form>
      </div>
    </div>

    <script>
      document.getElementById("subscribe-form").addEventListener("submit", function (event) {
        event.preventDefault();
        var email = document.getElementById("subscribe-input").value;
        alert("Terima kasih! Anda telah berhasil bergabung dengan kami.");
        document.getElementById("subscribe-input").value = ""; // Hapus input setelah berlangganan
      });
    </script>
</body>

</html>
