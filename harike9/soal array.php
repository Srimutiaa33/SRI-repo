<?php
#angka ganjil
echo "angka ganjil = <br> <br>";
$angka=array("7","5","9","12","4","54","76","98");
foreach ($angka as $n){
    if($n%2==1)
    echo $n."<br>";
}



#jumlah seluruh angka
echo "<br><hr>";
$jumlah= 0;
    foreach ($angka as $n){
        $jumlah=$jumlah+$n;
}
  echo "jumlah seluruh angka = <br> <br>";
  echo $jumlah;



#angka dari kecil ke besar
  echo "<br><br><hr>";
  asort ($angka);
  echo "urutan angka dari kecil ke besar = <br><br> ";
  foreach ($angka as $n){
    echo $n."<br>";
  }


#angka dari besar ke kecil
  echo "<br><br><hr>";
  arsort ($angka);
  echo "urutan angka dari besar ke kecil = <br><br> ";
  foreach ($angka as $n){
    echo $n."<br>";
  }

?>

