<?php

//Perulangan--> Looping
//inisialisasi variabel perulangan;kondisi perulangan; penjumlahan/pengurangan;
echo "<h3>Perulangan While</h3>";
for($i=0;$i<=4;$i++){
    echo "ini perulangan ke-$i <br>";
}

echo"<hr>";
echo "<h3>Perulangan While</h3>";
$a=0;
while ($a<=4){
    echo "ini perulangan ke-$a <br>";
    $a++;
}

echo"<hr>";
echo "<h3>Perulangan Do-While</h3>";
$a=0;
do{
    echo "ini perulangan ke-$a <br>";
    $a++;
} while($a<=1);

?>
