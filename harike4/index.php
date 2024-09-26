<?php
//buatlah aplikasi untuk menentukan diskon dengan ketentuaan jika totalBelanja lebih dari 100% maka akan mendapatkan diskon sebesar 5%, jia totalBelanja lebihdari 200k maka akan mendapatakan diakoan sebesar 10%.Tentukaan totalBelanja setelah dikurangi diskon.

//Algoritma
//1.inisialisasi variabel totalBelanja
//2.inisialisasi variabel diskon 
//3.jika totalBelanja lebih dari 200k maka diskon 10%
//4.jika totalBelanja lebih dari 100k maka diskon 5%
//5.jika tidak maka diskon 0%

$totalBelanja=150000;
$diskon=0;

if($totalBelanja>200000){
    $diskon=0.1;
}elseif($totalBelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}
$potonganHarga=$totalBelanja*$diskon;
$totalBayar=$totalBelanja-$potonganHarga;

echo "Total Bayar = ";
echo $totalBayar;

?>