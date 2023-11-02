<!DOCTYPE html>
<html lang="id">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jelajah.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Budaya Indonesia</title>

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
        <h1><span>B</span>udaya <span>I</span>ndonesia</h1>

        <p>
            Indonesia terdiri atas multi etnis (suku bangsa),tiap etnis memiliki warisan budaya yang
            berkembang selama berabad-abad, sehingga menjadikan <b><u>Indonesia sebagai negara multikultur yang tidak ada duanya di dunia.</u></b> Keanekaragaman suku bangsa yang menciptakan keanekaragaman budaya
            ditaman sari tanah air Indonesia. Keanekaragaman budaya Indonesia menambah keindahan Indonesia, yang dapat menjadi potensi daya tarik wisata, dan sumber inspirasi inovasi bagi para kreator Industri kreatif di berbagai bidang. Industri kreatif adalah industri atau kegiatan ekonomi yang berasal dari pemanfaatan kreativitas, keterampilan serta bakat individu untuk menciptakan kesejahteraan serta lapangan pekerjaan melalui
            penciptaan
            dan pemanfaatan daya kreasi dan daya cipta individu tersebut, yang menciptakan nilai tambah ekonomi atau
            lazim
            disebut ekonomi kreatif. Industri kreatif adalah bidang yang cukup luas dan masih terbuka lebar seperti
            musik,
            film, fashion, komunikasi visual, kerajinan tangan, IT, dsb. yang dapat diterjuni oleh para kreator untuk
            menjadi seorang creativepreneur, yang kelak akan dapat menjadi orang yang berkecukupan.

        </p>

        <div class="container">
            <div class="items">
                <p>
                    <b>Indonesia memiliki sekitar 300 kelompok etnis (suku bangsa)</b>, tiap etnis memiliki warisan
                    budaya yang berkembang selama berabad-abad, dipengaruhi oleh kebudayaan India, Arab, ,Tiongkok,
                    Eropa, dan termasuk kebudayaan sendiri yaitu Melayu. Contohnya tarian Jawa dan Bali tradisional
                    memiliki aspek budaya dan mitologi Hindu, seperti wayang kulit yang menampilkan kisah-kisah tentang
                    kejadian mitologis Hindu Ramayana dan Baratayuda.
                </p>
            </div>

            <img class="items" src="img/ax.png">

            <div class="items">
                <p class="kanan">
                    Indonesia merupakan negara yang memiliki banyak budaya yang sangat beragam, seperti budaya orang
                    Jawa
                    yang terkenal dengan unggah-ungguh atau kesopanan, budaya sunda yang terkenal dengan
                    kelembutannya,dan
                    masih banyak budaya-budaya lainnya yang ada tersebar diwilayah Indonesia.
                </p>
                <p>
                    Menurut Ki Hajar Dewantara bahwa budaya merupakan hasil perjuangan masyarakat terhadap alam dan
                    zaman yang
                    membuktikan kemakmuran & kejayaan hidup masyarakat dalam menyikapi atau menghadapi kesulitan dan
                    rintangan untuk mencapai kemakmuran, keselamatan dan kebahagiaan di hidupnya.
                </p>
            </div>
        </div>






    </section>

</body>

</html>