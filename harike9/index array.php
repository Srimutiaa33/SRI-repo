<?php
#menurut baris 
$nama=array("andi","Budi","Candra","Dedi","Emon");

echo $nama[3]."<br> <br><hr>";


#berderet kebawah
$nama=array("andi","Budi","Candra","Dedi","Emon");
foreach ($nama as $n){
    echo $n."<br>";
}

#ganti nama
echo "<br><hr>";
$nama[4]="hafis";
foreach($nama as $n){
    echo $n. "<br>";
}


#coba
$car = array("brand" =>,"model" => "Mustang", "year" =>1964);
var_dum($car);

echo"<br><hr>";
$car = array("brand" => "ford","model"=> "Mustang","year"=>1964);
echo $car["model"];

echo"<br><hr>";
$car = array("brand" => "ford","model"=> "Mustang","year"=>1964);
foreach ($car as $x => $y){
    echo "$x:$y <br>";
}
?>







