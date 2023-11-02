<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Profil | Budaya Indonesia</title>

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
        <h1><span>P</span>rofil</h1>
        
        <div class="container">
            <div class="items-1">
                <img src="img/profil.jpg" alt="">

            </div>
            <div class="items-2">
                <table >
                    <tr>
                        <td>Nama</td>
                        <td>: Anggota Kelompok 1 </td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>: 22104410000</td>
                    </tr>

                    <tr>
                        <td>Program Studi </td>
                        <td>: Teknik Informatika </td>
                    </tr>
                </table>
                
            </div>
        </div>
        
    </section>

</body>

</html>