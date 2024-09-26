<?php
#langka 1
$data_siswa=[
    "Andi" => 67345345,
    "Budi" => 76245345,
    "Candra" => 89345345,
];
echo "<br>";
echo "Data Siswa<br>";
echo "============== <br>";
echo "Nama | NISN <br>";
echo "============== <br>";
var_dump($data_siswa);
foreach ($data_siswa as $nama => $n){
    echo "$nama | $n<br>";
    
}


#langkah 2
echo "<br><hr>";
$dataSiswa=array(array( "nama"=>"Andi","nisn"=>"67345345"),
                 array( "nama"=>"Budi","nisn"=>"76245345"),
                 array( "nama"=>"Candra","nisn"=>"89345345"));

// var_dump($dataSiswa);
foreach($dataSiswa as $dt){
    echo $dt['nama']."-".$dt['nisn']."<br>";
}
?>