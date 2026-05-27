<?php

// Soal 1: Profil User Sederhana (Introduction, Syntax, Variable & Data Type) -->
// Mendefinisikan minimal 5 variabel: nama (string), usia (integer), saldo (float), statusAktif (boolean), hobi (array of string).
// Menampilkan informasi user dalam format sederhana (boleh HTML atau plain text) menggunakan echo.
// Gunakan var_dump() minimal 1 kali untuk menampilkan tipe data salah satu variabel.
// Tambahkan satu function tampilkanProfil($nama, $usia, $statusAktif, $hobi) yang:

// Menerima parameter dan menampilkan teks deskriptif tentang user.
// Tidak boleh mengakses variabel global secara langsung (harus lewat parameter). 

    $nama = "Andi";
    $usia = 21;
    $saldo = 5000;
    $statusAktif = true;
    $hobi = ["tidur", "baca buku", "menulis"];

    var_dump($statusAktif);

    function tampilkanProfil($nama, $usia, $statusAktif, $hobi) {
        $status   = $statusAktif ? "Aktif" : "Tidak Aktif";
        echo "Nama : $nama\n";
        echo "Usia : $usia\n";
        echo "Status Aktif : $status\n";
        echo "Hobi : $hobi\n";
    }

    tampilkanProfil($nama, $usia, $saldo, $hobi);
    echo ("Rp $saldo\n");
?> 