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
            <h1><span>D</span>ata <span>B</span>udaya</h1>
            <p style="text-align:center; text-indent: 0;">
                Berikut data budaya tiap provinsi yang ada di Indonesia:
            </p>
            <a href="tambah-budaya.php" class="btn tambah">Tambah Data Budaya</a>
            <!-- tabel data budaya  -->
            <table>
                <tr>
                    <th><b>No</b></th>
                    <th><b>Nama Provinsi</b></th>
                    <th><b>Bahasa Daerah</b></th>
                    <th><b>Rumah Adat</b></th>
                    <th><b>Tari Adat</b></th>
                    <th><b>Makanan Khas</b></th>
                    <th><b>Aksi</b></th>
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
                    <!-- <td><?php echo $data['id_budaya'];?></td> -->
                    <td><?php echo $data['provinsi'];?></td>
                    <td><?php echo $data['bahasa'];?></td>
                    <td><?php echo $data['rumah'];?></td>
                    <td><?php echo $data['tarian'];?></td>
                    <td><?php echo $data['makanan'];?></td>
                    <td>
                        <a href="ubah-budaya.php?id_budaya=<?php echo $data['id_budaya'];?>" class="btn ubah" >Ubah Budaya</a>
                        <a href="hapus-budaya.php?id_budaya=<?php echo $data['id_budaya'];?>" class="btn"  onclick="return confirm('Yakin Hapus data ini?')">Hapus Budaya</a>
                    </td>
                </tr>
                <!-- akhir perulangan  -->
                <?php } ?>
            </table>
        </div>

    </section>
</body>

</html>