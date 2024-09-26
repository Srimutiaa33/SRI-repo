<?php

$nilai = 90; 

if ($nilai > 100) {
    $hasil = "Angka tidak terdaftar";
} elseif ($nilai >= 90) {
    $predikat = 'A';
} elseif ($nilai >= 80) {
    $predikat = 'B';
} elseif ($nilai >= 70) {
    $predikat = 'C';
} elseif ($nilai >= 60) {
    $predikat = 'D';
} else {
    $predikat = 'E';
}

if ($nilai <= 100) {
    $hasil = "$nilai:$predikat";
}

echo $hasil;
?>
