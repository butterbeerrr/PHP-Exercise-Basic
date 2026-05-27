<?php
// Soal 3: Mini Sistem Kasir (Conditional, Function, Array, Looping)

// Buat	function	hitungTotalBelanja($daftarBelanja,	$isMember	=	false)	dengan spesifikasi:
// $daftarBelanja adalah array of associative array dengan struktur: [
// ["nama" => "Item A", "harga" => 25000, "qty" => 2],

// ...

// ]

// Gunakan foreach untuk menghitung:
// Subtotal per item = harga × qty
// Grand total = jumlah seluruh subtotal
// Aturan diskon:
// Member: diskon 15% dari grand total.
// Jika total qty semua item > 5: tambahan diskon 5% ( jadi total 20% untuk member, 5% untuk non-member).
// Function mengembalikan associative array: [
// "grandTotal" => ...,

// "totalQty" => ..., "diskonPersen" => ..., "diskonNominal" => ..., "totalBayar" => ...
// ]

// Buat minimal 2 skenario pemanggilan:

// Non-member dengan total qty kecil.
// Member dengan total qty > 5.

// Tampilkan hasil perhitungan dengan echo, gunakan number_format() untuk format rupiah.
    function hitungTotalBelanja($daftarBelanja,	$isMember =	false){
        $grandTotal = 0;
        $totalQty   = 0;

        foreach ($daftarBelanja as $item) {
            $subtotal   = $item["harga"] * $item["qty"];
            $grandTotal += $subtotal;
            $totalQty   += $item["qty"];
        }
        
        if ($isMember && $totalQty > 5) {
            $diskonPersen = 20;
        } elseif ($isMember) {
            $diskonPersen = 15;
        } elseif ($totalQty > 5) {
            $diskonPersen = 5;
        } else {
            $diskonPersen = 0;
        }

        if($isMember){
            if($totalQty <= 5){
                $diskonNominal = $grandTotal * ($diskonPersen / 100);
                $totalBayar    = $grandTotal - $diskonNominal;
            }else{
                $diskonNominal = $grandTotal * ($diskonPersen / 100);
                $totalBayar    = $grandTotal - $diskonNominal;
            }
        }else{
            if($totalQty <= 5){
                $diskonNominal = $grandTotal * ($diskonPersen / 100);
                $totalBayar    = $grandTotal - $diskonNominal;
            }else{
                $diskonNominal = $grandTotal * ($diskonPersen / 100);
                $totalBayar    = $grandTotal - $diskonNominal;
            }
        }

        return [
            "grandTotal"    => $grandTotal,
            "totalQty"      => $totalQty,
            "diskonPersen"  => $diskonPersen,
            "diskonNominal" => $diskonNominal,
            "totalBayar"    => $totalBayar
        ];
    } 

    // Skenario 1: Non-member, qty kecil (total qty <= 5)
    $belanja1 = [
        ["nama" => "Pensil",  "harga" => 5000,  "qty" => 2],
        ["nama" => "Buku",    "harga" => 15000, "qty" => 1],
        ["nama" => "Penggaris","harga" => 8000, "qty" => 2],
    ];
    $hasil1 = hitungTotalBelanja($belanja1, false);
    echo number_format($hasil1["totalBayar"], 0, ',', '.') . "\n";

// Skenario 2: Member, qty besar (total qty > 5)
    $belanja2 = [
        ["nama" => "Tas",     "harga" => 150000, "qty" => 2],
        ["nama" => "Sepatu",  "harga" => 200000, "qty" => 3],
        ["nama" => "Kaos",    "harga" => 75000,  "qty" => 2],
    ];  
    $hasil2 = hitungTotalBelanja($belanja2, true);
    echo number_format($hasil2["totalBayar"], 0, ',', '.');
?>