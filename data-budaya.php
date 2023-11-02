<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Budaya Indonesia</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tabel.css">
    <!-- <link rel="stylesheet" href="css/rumah.css"> -->

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
        <!-- part judul dan gambar -->
        <div class="container-1" style="padding:20px;">
            <h1><span>D</span>ata <span>B</span>udaya</h1>
            <p style="text-align:center; text-indent: 0;">
                Berikut data budaya tiap provinsi yang ada di Indonesia:
            </p>
            <?php
                if(isset($_SESSION['admin'])){
                    echo('<a href="tambah-budaya.php" class="btn tambah">Tambah Data Budaya</a>');   
                }
            ?>
            
            <!-- tabel data budaya  -->
            <table style="margin-top:50px;">
                <tr style="text-align:center;">
                    <th><b>No</b></th>
                    <th><b>Nama Provinsi</b></th>
                    <th><b>Bahasa Daerah</b></th>
                    <th><b>Rumah Adat</b></th>
                    <th><b>Tari Adat</b></th>
                    <th><b>Makanan Khas</b></th>
                    <?php
                        if(isset($_SESSION['admin'])){
                            echo('<th style="width:300px;"><b>Aksi</b></th>');   
                        } 
                    ?>                   
                </tr>

                <!-- koneksi ke database dan simpan hasil query ke var data  -->
                <?php 
                    include "koneksi.php";
                    $query = "SELECT * FROM budaya";
                    $result = mysqli_query($conn, $query);
                    $no = 1;

                    while($data = mysqli_fetch_array($result)){
                        ?>
                        <!-- perulangan tiap baris pada var data  -->
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $data["provinsi"];?></td>
                    <td><?php echo $data["bahasa"];?></td>
                    <td><?php echo $data["rumah"];?></td>
                    <td><?php echo $data["tarian"];?></td>
                    <td><?php echo $data["makanan"];?></td>
                    <?php
                        if(isset($_SESSION['admin'])){
                            echo ("<td style='width:300px;'> 
                            <a href='ubah-budaya.php?id_budaya=".$data["id_budaya"]."' class='btn ubah' >Ubah Budaya</a>
                            <a href='hapus-budaya.php?id_budaya=".$data["id_budaya"]."' class='btn'  onclick='return confirm('Yakin Hapus data ini?')'>Hapus Budaya</a>
                                </td>");   
                        }
                    ?>
                </tr>
                <!-- akhir perulangan  -->
                <?php } ?>
            </table>
        </div>

    </section>
</body>

</html>