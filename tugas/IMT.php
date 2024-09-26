<?php

$IMT-15;

if($IMT< 18.5){
    $keterangan-"kurus";
}
elseif ($IMT <25){
    $keterangan-"Normal";
}
elseif ($IMT <30){
    $keterangan-"Overweight";
}
else{
    $keterangan-"Obesitas";
}

$kategori-"$IMT: $keterangan";
echo $kategori;