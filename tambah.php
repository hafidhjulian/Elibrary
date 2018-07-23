<?php

include("koneksi.php");

    if(isset($_POST['tambah'])){

       // ambil data dari formulir
       $judul = $_POST['judul'];
       $penerbit = $_POST['penerbit'];
       $tahun = $_POST['tahun'];
       $posisi = $_POST['posisi'];

                         
        $sql = "INSERT INTO perpus (judul, penerbit, tahun, posisi) VALUE ('$judul', '$penerbit', '$tahun', '$posisi')";
        $query = mysqli_query($db, $sql);
        if($query){
            header('location:pageAdmin.php?status=sukses');
        }else{
            header('location:pageAdmin.php?status=gagal');
        }
        
    }

    ?>
