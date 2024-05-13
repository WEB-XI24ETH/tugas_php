<?php
$nilai_kkm = 70;
$nilai_hafiz = 70 ;

if ($nilai_hafiz >= $nilai_kkm ) {
    echo 'lulus' ;
} else {
    echo 'remedial';
}

echo "<br>";

$bilangan = 123456789;

if ($bilangan % 11 == 0) {
 echo 'habis dibagi 11';
} else {
    echo 'tidak habis dibagi 11';
}

echo "<br>";

#tinggi air 
$hari_ini = 945;
$batasan = 950;

if ($hari_ini > $batasan){
    echo 'bahaya!';
} else {
    echo 'tidak bahaya';

}

echo "<br>";


$harga_telur = 3000;
$jumlah_telur = 10; 
$harga_susu = 8000; 
$jumlah_susu = 1; 
$harga_mie_instan = 3000;  
$jumlah_mie_instan = 5; 

$total_belanja = ($harga_telur * $jumlah_telur) + ($harga_susu * $jumlah_susu) + ($harga_mie_instan * $jumlah_mie_instan);
$uang_pakman = 100000;

if ($uang_pakman > $total_belanja) {
    $jawaban_5 = 'Uang lebih.';
} elseif ($uang_pakman == $total_belanja) {
    $jawaban_5 = 'Uang pas.';
} else {
    $jawaban_5 = 'Uang kurang.';
}



echo "<br>";

$nilai_arin = 74;
$nilai_minimal = 75;

if ($nilai_arin >= $nilai_minimal) {
    echo "tidak perlu perbaikan";
} else {
    echo 'perlu perbaikan';
}

echo "<br>";

$toleransi = 5;
$tinggi_model = 167;
$rata_tinggi = 165;
$tinggi_minimal = $rata_tinggi - $toleransi;
$tinggi_maksimal = $rata_tinggi + $toleransi;

if ($tinggi_minimal <= $tinggi_model && $tinggi_model <=$tinggi_maksimal) {
    echo 'Diterima';
 
} else {
    echo 'Tidak diterima';}
    
echo "<br>";

$nilai_mtk = 84; // ganti titik-titik dengan nilai Matematika Rudi
$nilai_ing = 77.5; // ganti titik-titik dengan nilai Bahasa Inggris Rudi

// ganti semua titik-titik dengan kode yang benar.
if ($nilai_mtk >= 75 && $nilai_ing >= 75) {
    if ($nilai_mtk > 85 && $nilai_ing >= 80) {
        $jawaban_8 = 'Kelas A';
    } elseif ($nilai_mtk > 80 && $nilai_ing >= 77.5) {
        $jawaban_8 = 'Kelas B';
    } else {
        $jawaban_8 = 'Kelas C';
    }
} else {
    $jawaban_8 = 'Tidak diterima';
}

echo "<br>";

$i = 1;
$jawaban_9 = 600; // ganti dengan angka yang tepat

// ganti titik-titik dengan kode yang tepat
while ((8*$i)**2 < $jawaban_9) {
    echo (8*$i) . "<br>";
    $i++;
}

echo "<br>";

$jawaban_10 = 0;

// ganti semua titik-titik dengan kode yang tepat
for ($i = 1; $i <= 10; $i++) {
    $jawaban_10 += $i**2;
}

echo "<br>";


$jawaban_14 = 0;

// ganti titik-titik dengan kode yang tepat
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 != 0) {
        $jawaban_14 += $i;
    }
}
?>





