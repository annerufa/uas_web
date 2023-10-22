<?php
    include "koneksi.php";

    if(isset($_POST['tambah-budaya'])){
        $provinsi= $_POST['provinsi'];
        $bahasa = $_POST['bahasa'];
        $rumah = $_POST['rumah'];
        $tari = $_POST['tari'];
        $makanan = $_POST['makanan'];

        // $nama_img = $_FILES['gambar']['name'];
        // $tmp_name= $_FILES['gambar']['tmp_name'];
        // $folder = "img/" .$nama_img;

        // move_uploaded_file($tmp_name, $folder);

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
    <header>
        <nav>
            <ul>
                <li><a href="project.html" class="button">Beranda</a></li>
                <li><a href="Tentang Kami-Perulangan.php" class="button">Tentang Kami</a></li>
                <li><a href="pakaian adat.html" class="button">Baju Adat</a></li>
                <li><a href="rumahAdat.html" class="button">Rumah Tradisional</a></li>
                <li><a href="tari-tradisional.html" class="button">Tari Tradisional</a></li>
                <li><a href="data-budaya.php" class="button">Data Budaya</a></li>
                <li><a href="login.html" class="button">LOGIN</a></li>
                <li><a href="subscribe.html" class="button">SUBSCRIBE</a></li>
            </ul>
        </nav>
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