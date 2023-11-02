<html lang="en">

<head>
    <title>Contoh Baju Adat di Indonesia</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/pakaian.css">

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

    <section>
        <h1><span>B</span>aju <span>A</span>dat</h1>
        <div class="baju-container">
            <div class="baju">
                <h2>Baju Adat Papua</h2>
                <img src="img/papua.jpeg" alt="Baju Adat Papua">
                <p>Pakaian Sali adalah pakaian adat Papua yang hanya dikenakan oleh para gadis, sementara wanita yang
                    telah menikah tidak diperkenankan menggunakan pakaian adat ini. Bahan pembuat Baju Sali adalah daun sagu
                    atau kulit pohon pilihan yang berwarna coklat untuk menghasilkan warna sempurna. Banyak yang menyebut
                    Baju Sali sekilas mirip dengan kain yang dijahit. Baju Sali digunakan untuk melakukan kegiatan
                    sehari-hari dengan cara dililitkan di tubuh, dengan bagian dalam lebih panjang daripada bagian luar.
                </p>
            </div>

            <div class="baju">
                <h2>Baju Adat Lampung</h2>
                <img src="img/lampung.jpeg" alt="Baju Adat Lampung">
                <p>Keunikan pakaian adat Lampung ini yaitu bahannya terbuat dari kain beludru dengan motif floral bunga
                    tabur, salur, atau pucuk rebung. Pengantin pria mengenakan kain berbahan beludru dan bagian kepala
                    memakai kopiah tungkus..</p>
            </div>

            <div class="baju">
                <h2>Baju Adat Riau</h2>
                <img src="img/riau.jpeg" alt="Baju Adat Riau">
                <p>Baju kurung labuh adalah baju kurung khas Riau yang dipakai kaum perempuan Melayu, memiliki arti
                    mengurung yang memakainya, baik mengurung dalam Adat juga dalam Syariat, baju kurung ini biasanya
                    dipakai pada upacara adat, acara resmi, juga pakaian harian..</p>
            </div>

            <div class="baju">
                <h2>Baju Adat Kalimantan</h2>
                <img src="img/kalimantan.jpeg" alt="Baju Adat Kalimantan">
                <p>Baju adat Miskat adalah pakaian tradisional Kalimantan Timur yang dulunya menjadi pakaian resmi
                    Sultan  Banjar. Model baju Miskat tampak seperti baju cina jaman dahulu. Baju Miskat untuk kaum pria berupa
                    baju lengan panjang dengan kancing yang miring ke bagian kanan..</p>
            </div>

            <div class="baju">
                <h2>Baju Adat Batam</h2>
                <img src="img/batam.jpeg" alt="Baju Adat Batam">
                <p>Pakaian tradisional Kepulauan Riau sering ditemukan pada ragam pakaian tradisional kebaya labuh dan
                    teluk belanga yang menjadi pakaian tradisi Kepulauan Riau saat ini. Indonesia memang terkenal akan
                    keberagaman budaya dan kemegahannya, seperti megahnya Rumah Ekslusif dari Pinhome contohnya Alora Springhil dan
                    Daun Village.

                    Nama pakaian Adat Kepulauan Riau adalah Kebaya Labuh dan teluk belanga. Namun, sebenarnya bukan
                    hanya itu, masih banyak jenis pakaian tradisional di provinsi tersebut, hanya saja, dikalangan nasional
                    kedua pakaian itulah yang menjadi ikon wilayah ini. Di Kep. Riau terdapat baju kurung keke, baju gunting
                    cina, baju telepuk, dan lain-lain..</p>
            </div>
        </div>
    </section>
</body>

</html>