<?php
//     Soal 4: Data Siswa & Rekap Nilai (Array Multidimensi, Looping, Function)

// [

// [

// "nama" => "Budi", "jurusan" => "RPL", "nilai" => [80, 90, 75]
// ],

// ...

// ]

// Buat function prosesDataSiswa($dataSiswa) yang:

// Menggunakan foreach untuk:
// Menghitung rata-rata nilai tiap siswa (gunakan array_sum() dan count()).
// Menambahkan key baru rataRata ke setiap siswa.
// Menentukan status:
// rataRata >= 85 → "Lulus dengan pujian"
// 70–84 → "Lulus"
// < 70 → "Remedial”
// Mengembalikan array siswa yang sudah diproses.

// Tambahan:

// Filter siswa yang status-nya bukan "Remedial" ke array baru $siswaLulus.
// Tampilkan daftar siswa lulus dengan looping.

// Ekspektasi Output:

// Struktur kode modular dan dapat dibaca.
// Semua function harus bisa dijalankan dengan parameter berbeda (tidak hardcoded).
// Semua kondisi dan format output sesuai petunjuk.
// Penggunaan Lodash harus benar dan sesuai dokumentasi.

    $dataSiswa = [
        ["nama" => "Budi",  "jurusan" => "RPL", "nilai" => [80, 90, 75]],
        ["nama" => "Ani",   "jurusan" => "TKJ", "nilai" => [90, 95, 88]],
        ["nama" => "Caca",  "jurusan" => "RPL", "nilai" => [60, 55, 65]],
        ["nama" => "Dodi",  "jurusan" => "MM",  "nilai" => [70, 75, 80]],
        ["nama" => "Eka",   "jurusan" => "TKJ", "nilai" => [88, 92, 85]],
    ];

    function prosesDataSiswa($dataSiswa){
        foreach($dataSiswa as &$siswa){
            $siswa["rataRata"] = array_sum($siswa["nilai"]) / count($siswa["nilai"]);
            $siswa["status"] = "";
            if($siswa["rataRata"] >= 85){
                $siswa["status"] = "Lulus dengan pujian";
            }elseif($siswa["rataRata"] >= 70){
                $siswa["status"] = "Lulus";
            }else{
                $siswa["status"] = "Remedial";
            }
        }

        return $dataSiswa;
    }

    $hasil = prosesDataSiswa($dataSiswa);

    $siswaLulus = [];

    foreach($hasil as $siswa){
        if($siswa["status"] != "Remedial"){
            $siswaLulus[] = $siswa;
        }
    }  

    foreach($siswaLulus as $siswa){
        echo "Nama    : ".$siswa["nama"] ."\n";
        echo "Jurusan : " .$siswa["jurusan"] ."\n";
        echo "Rata-rata: " .$siswa["rataRata"]. "\n";
        echo "Status  : ".$siswa["status"] ."\n";
        echo "-----------------\n";
    }
?>