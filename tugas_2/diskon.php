<?php

function hitungPotonganHarga($totalBelanja) {
    // Inisialisasi variabel diskon dan persentase
    $jumlahDiskon = 0;
    $persen = "0%";

    if ($totalBelanja >= 100000) {
        $jumlahDiskon = $totalBelanja * 0.10;
        $persen = "10%";
    } 
    elseif ($totalBelanja >= 50000) {
        $jumlahDiskon = $totalBelanja * 0.05;
        $persen = "5%";
    } 
    else {
        $jumlahDiskon = 0;
        $persen = "0%";
    }

    // Menghitung total akhir yang harus dibayar
    $totalBayar = $totalBelanja - $jumlahDiskon;

    // Menampilkan hasil dengan format mata uang Rupiah
    echo "--------------------------------------<br>";
    echo "Total Belanja Awal : " . formatRupiah($totalBelanja) . "<br>";
    echo "Kategori Diskon    : " . $persen . "<br>";
    echo "Nominal Potongan   : " . formatRupiah($jumlahDiskon) . "<br>";
    echo "<strong>Total Bayar        : " . formatRupiah($totalBayar) . "</strong><br>";
    echo "--------------------------------------<br><br>";
}

// Fungsi pembantu untuk format Rupiah
function formatRupiah($angka){
    return "Rp. " . number_format($angka, 0, ',', '.');
}

// --- PENGUJIAN KASUS (TEST CASES) ---

// Kasus 1: Di atas 100.000
echo "<h3>Tes Kondisi 1 (Belanja Rp 150.000)</h3>";
hitungPotonganHarga(150000);

// Kasus 2: Antara 50.000 dan 100.000
echo "<h3>Tes Kondisi 2 (Belanja Rp 75.000)</h3>";
hitungPotonganHarga(75000);

// Kasus 3: Di bawah 50.000
echo "<h3>Tes Kondisi 3 (Belanja Rp 30.000)</h3>";
hitungPotonganHarga(30000);

?>