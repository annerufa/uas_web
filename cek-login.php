<?php

include "koneksi.php";

if(isset($_POST['nim']) && isset($_POST['password'])) {
    // query search where nim and password dari db
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM admin WHERE nim = '$nim' AND password = '$password' "; 
    $result = mysqli_query($conn,$sql); 
    $check = mysqli_fetch_array($result); 

    // jika ada maka akan mulai isi session dan masuk sbg admin
    if(isset($check)) {
        session_start();
        $_SESSION['admin']="success";
        header("location:profil.php");
    } elseif($_POST['nim'] != $nim && $_POST['password'] != $password) {
        echo "<center><h1>Gagal!, NIM & Password Salah</h1></center>";
    } else {
    echo "<center><h1>Gagal!Coba chek kembali</h1></center>";

    }
}

?>