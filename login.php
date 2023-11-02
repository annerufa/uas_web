<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Login</title>

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
        <form action="cek-login.php" method="post">
            <h2>Login Mahasiswa</h2> <br><br>
            <b> <label>
                    Nama <input type="text" name="nama" placeholder="Masukkan Nama Lengkap"> <br><br>
                </label>
                <label>
                    Program Studi <input type="text" name="program_studi" placeholder="Masukkan Jurusan">
                    <br><br>
                </label>
                <label>
                    NIM <input type="text" name="nim" placeholder="Masukkan NIM"> <br><br>
                </label>
                <label>
                    Password <input name="password" type="password" placeholder="Masukkan Password">
                </label>
                <input type="submit" value="Submit">
            </b>
        </form>
    </section>
</body>
</head>
</html>