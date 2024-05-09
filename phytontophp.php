<?php
$nilai_kkm = 55;
$nilai_fayyadh = 70;

if ($nilai_fayyadh >= $nilai_kkm){
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}

echo "<br>";

$bilangan = 837498578;

if ($bilangan % 5 == 0){
    echo "Habis dibagi 5";
} else {
    echo "Tidak habis dibagi 5";
}

echo "<br>";

$tinggi_air_skrg = 495;

if ($tinggi_air_skrg > 500){
    echo "Danger";
} else {
    echo "No Danger";
}

echo "<br>";

$h_telur = 58000;
$h_beras = 120000;
$h_mie   = 2000;
$uang    = 400000;
$totalharga = (2 * $h_telur) + (1 * $h_beras) + (6 * $h_mie);

if ($uang > $totalharga){
    echo "Ada kembalian";
} elseif ($totalharga == $uang){
    echo "Uang Pas";
} else {
    echo "Uang Kurang";
}

echo "<br>";

$nilai_ku = 74;
$nilai_minimal = 75;

if ($nilai_ku >= $nilai_minimal){
    echo "Tidak perlu perbaikan";
} else {
    echo "Perlu perbaikan";
}

echo "<br>";

$toleransi = 5;
$tinggi_model = 167;
$tinggi_rata = 165;
$max_tinggi = $tinggi_rata + $toleransi;
$min_tinggi = $tinggi_rata - $toleransi;

if ($min_tinggi <= $tinggi_model && $tinggi_model <= $max_tinggi){
    echo "diterima";
} else {
    echo "tidak diterima";
}

echo "<br>";

$nilai_mtk = 84;
$nilai_ing = 74.5;

if ($nilai_mtk >= 75 && $nilai_ing >= 75) {
    if($nilai_mtk > 85 && $nilai_ing > 80){
        echo "Masuk kelas A";
    } if ($nilai_mtk > 80 && $nilai_ing > 74.5) {
        echo "Masuk Kelas B";
    } else {
        echo "Masuk kelas C";
    }
} else {
    echo "Tidak diterima";
}

echo "<br>";

$i = 1;
$jawaban_1 = 600;

while ((8*$i)**2 < $jawaban_1) {
    echo (8*$i);
    $i++;
}

echo "<br>";

$kata = 'onomatopoeia';

for ($i = 0; $i < strlen($kata); $i++) {
    echo $kata[$i] . "";
    if ($kata[$i] == 't') {
        break;
    }
}

echo "<br>";

$jawaban_14 = 0;

//ganti titik-titik dengan kode yang tepat
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 != 0) {
        $jawaban_14 += $i;
    }
}

?>