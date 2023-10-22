<?php
    //tempel code dari file koneksi.php
    include "koneksi.php";

    //membuat variabel $id_tari yang berisi nilai 'id_tari' ketika tombol hapus di klik
    $id_budaya = $_GET['id_budaya'];
    $query = mysqli_query($conn,"DELETE FROM budaya WHERE id_budaya='$id_budaya'");

    // jika query dapat berjalan maka, buka halaman data-budaya.php 
    if($query){
        header('Location:data-budaya.php');
    }
?>