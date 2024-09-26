<?php

$JumlahJamKerja= 54 ;

if($JumlahJamKerja >48){
    $UpahLembur=($JumlahJamKerja-48)*3000 + (2000*48);
}
elseif($JumlahJamKerja <48){
    $UpahLembur=($JumlahJamKerja*2000);
}
 
echo "Total upah = " ;
echo $UpahLembur;

?>























