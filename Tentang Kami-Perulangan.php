<html>

<head>
    <title>Deskripsi Kelompok I</title>
    <link rel="stylesheet" href="css/tentang.css">
    <link rel="stylesheet" href="css/nav.css">
    <style>
        td,tr{
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- <div class="bg-image"></div> -->
   
        <div class="bg-image"></div>
        <div class="content">
            <header>
                <nav>
                    <ul>
                        <li><a href="project.html" class="button">Beranda</a></li>
                        <li><a href="Tentang Kami-Perulangan.php" class="button">Tentang Kami</a></li>
                        <li><a href="pakaian adat.html" class="button">Baju Adat</a></li>
                        <li><a href="rumahAdat.html" class="button">Rumah Tradisional</a></li>
                        <li><a href="tari-tradisional.html" class="button">Tari Tradisional</a></li>
                        <li><a href="login.html" class="button">LOGIN</a></li>
                    </ul>
                </nav>
            </header>
        
            <section>
                <h1><span>A</span>nggota <span>K</span>elompok <span>I</span>
                </h1>
        
                <div class="container">
                    <table border="1">
                        <tr>
                            <td colspan="4" style="background-color: chartreuse;"><b>Data Anggota Kelompok 1</b></td>
                        </tr>
                        <tr style="background-color: blue; color: aliceblue;" >
                            <td><b>NO</b></td>
                            <td><b>NIM</b></td>
                            <td><b>NAMA</b></td>
                            <TD><b>EMAIL</b></TD>
                        </tr>
                        <?php
$anggota_kelompok = array("Mochamad David Hariono", "Anne Rufaedah", "Trimurti Wisnu Prayogo", "Muhammad Yusuf Anap Hani", "Agi Pranata Purwanto");
$NIM= array ("22104410003","22104410023","22104410099","22104410107","22104410102");
$EMAIL= array("mochamaddavidhariono@gmail.com","rufaedah@gmail.com","wisnuprayogo57@gmail.com","myusufanaphani@gmail.com","agipranata27.gmail.com");
for ($i = 0; $i <count ($anggota_kelompok) ; $i++) {
    echo("<tr><td>" . ($i+1) ."</td>");
    echo("<td>" . $NIM[$i]."</td>");
    echo("<td>" . $anggota_kelompok[$i]."</td>");
    echo("<td>" . $EMAIL[$i] ."</td></tr>");
}

?>
     </div>   
</section>   
</body>

</html>