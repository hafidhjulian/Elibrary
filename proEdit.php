<?php

include_once("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $posisi = $_POST['posisi'];

    // buat query update
    $sql = "UPDATE perpus SET judul='$judul', penerbit='$penerbit', tahun='$tahun', posisi='$posisi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: pageAdmin.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
