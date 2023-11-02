<!-- Ambil data dari db dengan id tari yang telah dipilih -->
<?php
    include "koneksi.php";

    //membuat variabel $id_budaya yang berisi nilai 'id_budaya' ketika tombol hapus di klik
    $id_budaya = $_GET['id_budaya'];
    $tampil = mysqli_query($conn,"SELECT * FROM budaya WHERE id_budaya='$id_budaya'");

    // $tampil = mysqli_query($query);
    $data = mysqli_fetch_array($tampil);
    
?>

<?php echo $data['id_budaya'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tabel.css">
    <title>Ubah Data Budaya</title>
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
        <div class="container">
            <div class="items">
            <h1><span>U</span>bah <span>D</span>ata <span>B</span>udaya</h1>

                           <!-- form data budaya  -->
            <form action="" method="post">
            <input name="id_budaya" type="hidden" value="<?php echo $data['id_budaya']; ?>">
                <table>
                    <tr>
                        <td>Nama Provinsi</td>
                        <td>
                            : <input type="text" name="provinsi" id="provinsi" value="<?php echo $data['provinsi']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Bahasa Daerah</td>
                        <td>
                            : <input type="text" name="bahasa" id="bahasa" value="<?php echo $data['bahasa']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Rumah Adat</td>
                        <td>
                            : <input type="text" name="rumah" id="rumah" value="<?php echo $data['rumah']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Tari Adat</td>
                        <td>
                            : <input type="text" name="tarian" id="tarian" value="<?php echo $data['tarian']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Makanan Khas</td>
                        <td>
                            : <input type="text" name="makanan" id="makanan" value="<?php echo $data['makanan']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn tambah" id="btn-simpan" name="ubah-budaya" value="Simpan">
                        </td>
                    </tr>
                </table>
            </form>
            
            </div>
        </div>
    </section>
    <!-- logika yang dijalankan ketika tombol simpan di klik -->
    <?php
    if(isset($_POST['ubah-budaya'])){
        $provinsi= $_POST['provinsi'];
        $bahasa = $_POST['bahasa'];
        $rumah = $_POST['rumah'];
        $tarian = $_POST['tarian'];
        $makanan = $_POST['makanan'];

        $query = "UPDATE budaya SET provinsi='$provinsi',bahasa='$bahasa', rumah='$rumah', tarian='$tarian', makanan='$makanan' WHERE id_budaya='$_POST[id_budaya]'";

        if (mysqli_query($conn, $query)) {
            header('Location:data-budaya.php');
        }
        
    }
    ?>
</body>
</html>