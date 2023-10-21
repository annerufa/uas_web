<?php

// echo($_POST['nim']);
// echo($_POST['password']);
$nim = "12345";
$password = "123456";

if(isset($_POST['nim']) && isset($_POST['password'])) {
    if($_POST['nim'] == $nim && $_POST['password'] == $password) {
        
        echo '<meta http-equiv="refresh" content="2; url=./profil.php"/>';
        echo "<center><h1>Berhasil, dalam 2 detik kamu akan dialihkan ke halaman utama</h1></center>";
    } elseif($_POST['nim'] != $nim && $_POST['password'] == $password) {
        echo "<center><h1>Gagal!, NIM Salah</h1></center>";
    } elseif($_POST['nim'] == $nim && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, Password Salah</h1></center>";
    } elseif($_POST['nim'] != $nim && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, NIM & Password Salah</h1></center>";
    } 
} else {
    echo "<center><h1>Gagal!, jangan biarkan NIM & password kosong</h1></center>";
}

?>