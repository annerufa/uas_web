<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/rumah.css">
    <title>Rumah Adat</title>

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
        <div class="container-1">
            <div class="items"> 
                <h1><span>R</span>umah <span>A</span>dat</h1>
                <img src="img/rumah Sulsel Tongkonan.jpg" alt=""><br>
                <p><b>Rumah adat</b> adalah bangunan yang memiliki ciri khas khusus, digunakan untuk tempat hunian oleh suatu suku bangsa tertentu.Rumah adat merupakan salah satu representasi kebudayaan yang paling tinggi dalam sebuah komunitas suku/masyarakat. Keberadaan rumah adat di Indonesia sangat beragam dan mempunyai arti yang penting dalam perspektif sejarah, warisan, dan kemajuan masyarakat dalam sebuah peradaban.</p>
    
                <p>Rumah-rumah adat di indonesia memiliki bentuk dan arsitektur masing-masing daerah sesuai dengan budaya adat lokal. Rumah adat pada umumnya dihiasi ukiran-ukiran indah, pada jaman dulu, rumah adat yang tampak paling indah biasa dimiliki para keluarga kerajaan atau ketua adat setempat menggunakan kayu-kayu pilihan dan pengerjaannya dilakukan secara tradisional melibatkan tenaga ahli dibidangnya, Banyak rumah-rumah adat yang saat ini masih berdiri kokoh dan sengaja dipertahankan dan dilestarikan sebagai simbol budaya Indonesia.</p>
            </div>

        </div>

        <div class="container">
            <p>Berikut adalah beberapa contoh rumah adat yang ada di Indonesia:</p>
        </div>


        <div class="container">
            <div class="items">
                <p class="nama"><b>1. Rumah Gadang</b> </p>
                <p>Rumah Gadang ini terletak di Provinsi Sumatera Barat</p>
                <p> Ciri khas Rumah Gadang: </p>
                <ul class="ulist">
                    <li>Rumah ini didirikan diatas tanah orang yang bersangkutan dengan didahului musyarawah keluarga
                    </li>
                    <li>
                        Rumah ini dibangun, diperbaiki, dirobohkan dengan cara gotong royong.
                    </li>
                    <li>
                        Digunakan untuk tempat tinggal dan tempat adat ( tempat untuk kepentingan umum diutamakan)
                    </li>
                    <li>
                        Jumlah ruang biasanya ganjil</p>
                    </li>
                </ul>
            </div>
            <div class="items">
                <img src="img/rumah gadang minang.jpg" alt="">
            </div>
        </div>


        <div class="container">
            <div class="items">
                <img src="img/rumah-adat-JAMBI.jpg" alt="">
            </div>
            <div class="items">
                <p class="nama"><b>2. Rumah Panggung Kajang Leko</b></p>
                <p>Rumah Panggung Kajang Leko ini terletak di Provinsi Jambi</p>
                <p>Rumah adat Jambi ini merupakan hasil dari pencarian identitas daerah. Pada tahun 70'an Gubernur Jambi mengadakan sayembara "Sepucuk Jambi Sembilan Lurah" untuk menetapkan rumah adat apa yang akan menjadi identitas Jambi. Akhirnya rumah panggung ditetapkan sebagai rumah adat jambi. Rumah ini berasal dari arsitetur Marga Bathin. Rumah ini berbentuk persegi panjang dengan ukuran kurang lebih 12 x 9 meter. Rumah Panggung Kajang Leko adalah salah satu bentuk pengejawantahan cita rasa seni, budaya, dan keyakinan masyarakat Jambi yang tersirat mulai dari bentuk bangunan, fungsi ruangan, seni ukiran, dll </p>
            </div>
        </div>



        <div class="container">
            <div class="items">
                <p class="nama"><b>3. Rumah Limas</b></p>
                <p>Rumah Limas ini terletak di Provinsi Sumatera Selatan (SUMSEL)
                <p>Ciri khas:</p>
                <ul class="ulist">
                    <li>
                        Rumah bertingkat-tingkat, terdapat filosofi budaya tersendiri disetiap tingkatannya, tingkatan
                        ini disebut bengkilas
                    </li>
                    <li>
                        Luasnya 400-1000 meter persegi
                    </li>
                    <li>
                        Karena luas, rumah limas biasa digunakan untuk acara adat.
                    </li>
                    <li>
                        Dinding kayu, pintu, dan lantai biasanya terbuat dari kayu tembesu, sementara tiang terbuat dari kayu Unglen yang tahan air.
                    </li>
                    <li> Adat yang kental sangat mendasari pembangunan Rumah Limas. Tingkatan yang dimiliki rumah ini disertai dengan lima ruangan yang disebut dengan kekijing. Ini merupakan simbol atas lima tahap kehidupan bermasyarakat yaitu: usia, jenis, bakat, pangkat dan martabat.
                    </li>
                    <li>
                        Tingkat atau kijing yang dimiliki Rumah Limas menandakan garis keturunan asli masyarakat
                        palembang
                    </li>
                </ul>
                </p>
            </div>
            <div class="items">
                <img src="img/rumah limas sumsel.JPG" alt="">
            </div>
        </div>


        <div class="container">
            <div class="items">
                <img src="img/Jakarta rumah-betawi kebaya.jpg" alt="">
            </div>
            <div class="items">
                <p class="nama"><b>4. Rumah Kebaya</b></p>
                <p>Rumah Kebaya ini terletak di Provinsi DKI Jakarta</p>
                <P>Ciri khas:</P>
                <P>
                <ul class="ulist">
                    <li>
                        Atap landai, diteruskan dengan atap pelana di bagian teras
                    </li>
                    <li>Ada yang berbentuk rumah panggung, ada yang rumah menapak diatas tanah</li>
                    <li>Biasanya ada sumur di halaman rumah</li>
                    <li>Lisplang terbuat dari kayu dengan ornamen segitiga sejajar disebut "gigi balang"</li>
                    <li>Pembagian ruangan dari depan ke belakang berdasarkan hierarki sifat publik ke servis di bagian belakang</li>
                    <li>Lantai teras depan "gojegan" selalu dibersihkan untuk menerima tamu</li>
                    <li>Ruang tamu disebut "Paseban"</li>
                    <li>Ruang tamu disebut "Pangkeng"</li>
                    <li>Ruang tidur disebut "Srondoyan".</li>
                </ul>
                </p>
            </div>
        </div>


        <div class="container">
            <div class="items">
                <p class="nama"><b>5. Rumah JOGLO</b> </p>
                <p>Rumah Joglo terletak di Provinsi Jawa Tengah</p>
                <p>Ciri khas rumah Joglo:</p>
                <p>
                <ul class="ulist">
                    <li>Ruangan pada umumnya terbagi menjadi: pendhopo, pringgitan, dan omah ndalem atau omah njero</li>
                    <li>dibangun diatas empat tiang penyangga yang disebut "soko guru"</li>
                    <li>terdapat juga tumpang sari yang merupakan susunan terbalik yang tersangga soko guru</li>
                </ul>
                </p>
            </div>
            <div class="items">
                <img src="img/jateng rumahjoglo.jpg" alt="">
            </div>
        </div>

    </section>

</body>

</html>