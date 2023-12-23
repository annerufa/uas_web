<?php
    include "koneksi.php";

    if(isset($_POST['tambah-budaya'])){
        $provinsi= $_POST['provinsi'];
        $bahasa = $_POST['bahasa'];
        $rumah = $_POST['rumah'];
        $tari = $_POST['tari'];
        $makanan = $_POST['makanan'];

        $query = "INSERT INTO `budaya`(`provinsi`,`bahasa`,`rumah`,`tarian`,`makanan`) VALUES ('$provinsi','$bahasa','$rumah','$tari','$makanan')";

        if (mysqli_query($conn, $query)) {
            header('Location:data-budaya.php');
        }         
    }
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Budaya</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tabel.css">
    <!-- <link rel="stylesheet" href="css/rumah.css"> -->

</head>

<body>
    <<header>
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
        <!-- part judul dan gambar -->
        <div class="container-1">
            <h1><span>T</span>ambah <span>D</span>ata <span>B</span>udaya</h1>

            <!-- form data budaya  -->
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Nama Provinsi</td>
                        <td>
                            : <input type="text" name="provinsi" id="provinsi">
                        </td>
                    </tr>
                    <tr>
                        <td>Bahasa Daerah</td>
                        <td>
                            : <input type="text" name="bahasa" id="bahasa">
                        </td>
                    </tr>
                    <tr>
                        <td>Rumah Adat</td>
                        <td>
                            : <input type="text" name="rumah" id="rumah">
                        </td>
                    </tr>
                    <tr>
                        <td>Tari Adat</td>
                        <td>
                            : <input type="text" name="tari" id="tari">
                        </td>
                    </tr>
                    <tr>
                        <td>Makanan Khas</td>
                        <td>
                            : <input type="text" name="makanan" id="makanan">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn tambah" id="btn-simpan" name="tambah-budaya" value="Simpan">
                        </td>
                    </tr>
                </table>
            </form>
            
        </div>

    </section>
</body>

</html>