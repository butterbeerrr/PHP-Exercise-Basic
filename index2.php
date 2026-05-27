<?php
// Buat function tentukanGrade($nilai) yang:

// Menerima satu parameter $nilai (0–100).
// Mengembalikan huruf grade:
// 85–100: A
// 70–84: B
// 60–69: C
// < 60: D
// Gunakan kombinasi if, elseif, dan else.

// Buat script yang:

// Menyimpan beberapa nilai ujian dalam array (minimal 5 nilai).
// Melakukan looping array tersebut dengan foreach, memanggil tentukanGrade() untuk setiap nilai, dan menampilkan: Nilai: X, Grade: Y.

    function tentukanGrade($nilai){
        if($nilai < 0 || $nilai > 100){
            return "Nilai harus rentang 0-100";
        }else{
            if($nilai >= 85){
                return "A";
            }elseif($nilai >= 70){
                return "B";
            }elseif($nilai >= 60){
                return "C";
            }else{
                return "D";
            }
        }
    }

    function tampilkanNilai($dataNilai){
        foreach($dataNilai as $nilai){
            $grade = tentukanGrade($nilai);
            echo "Nilai : $nilai, Grade : $grade\n";
        }
    }

    $nilai = [80,90,45,66,78];

    tampilkanNilai($nilai);
?>