<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $posisi = $_POST['posisi'];

    // buat query
    $sql = "INSERT INTO perpus (judul, penerbit, tahun, posisi) VALUE ('$judul', '$penerbit', '$tahun', '$posisi')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: pageAdmin.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pageAdmin.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
