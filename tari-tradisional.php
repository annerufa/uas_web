<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tari Tradisional</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tari.css">
</head>

<body>
    <header>
        <ul>
            <li><a href="project.html" class="button">Beranda</a></li>
            <li><a href="tentang-kami.php" class="button">Tentang Kami</a></li>
            <li><a href="pakaian adat.php" class="button">Baju Adat</a></li>
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

    <section>
        <!-- part judul dan gambar -->
        <div class="container">
            <div class="items judul">
                <h1><span>T</span>ari <span>T</span>radisional</h1>
                <p>
                    Tari tradisional adalah suatu tarian yang berasal dari masyarakat suatu daerah yang sudah
                    turun-temurun dan telah menjadi budaya masyarakat setempat. Tari tradisional dikelompokkan menjadi tiga yaitu tari klasik, tari rakyat atau folklasik, dan tari kreasi baru.
                </p>
                <a href="#content" class="myButton"><b><i>Read more</i></b></a>
            </div>
            <div class="items" id="gambar1">
                <img src="img/tari-topeng.png" alt="">
            </div>
        </div>

        <!-- part tari klasik  -->
        <div id="content"> 
            <div class="container">
                <div class="items">
                    <img class="gambar" src="img/tari-gambyong.webp" alt="">
                </div>
                <div class="items">
                    <p>
                        <b>Tari klasik</b> merupakan tari tradisional yang lahir di lingkungan keraton, hidup dan berkembang secara turun temurun di kalangan bangsawan. Tari klasik adalah jenis tarian yang biasanya menjadi tari yang memiliki nilai sakral tinggi bagi masyarakat setempat. Maka tidak mengherankan jika tari klasik adalah tarian yang berkembang secara turun-temurun di kalangan bangsawan.
                    </p>
                </div>
            </div>

            <!-- part tari rakyat  -->
            <div class="container">
                <div class="items">
                    <p><b>Tari rakyat atau folklasik</b> adalah jenis tari tradisional yang lahir di kebudayaan masyarakat lokal, hidup dan berkembang sejak zaman primitif, dan diturunkan secara turun-temurun. </p>
                </div>
                <div class="items">
                    <img class="gambar" src="img/tari-reog2.jpg" alt="">
                </div>
            </div>

            <!-- part tari kreasi  -->
            <div class="container">
                <div class="items">
                    <img class="gambar" src="img/tari-legong.jpg" alt="">
                </div>
                <div class="items">
                    <p><b>Tari kreasi</b> baru merupakan tari klasik yang mengalami aransemen dan dikembangkan sesuai perkembangan zaman, namun tetap mempertahankan nilai-nilai yang dimiliki didalamnya, tari kreasi baru biasanya diciptakan oleh para pakar tari</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>