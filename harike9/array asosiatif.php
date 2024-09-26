<?php
#menambah data
echo "array menambah data = <br><br>";
$data=array("nama"=>"Andi",
             "nisn"=>"98765665845",
             "kelas"=>"XI RPL 1"); 

$data["jenis_kelamin"]="Laki-Laki";//menambah data 
 
 foreach ($data as $dt){     
    echo $dt.'<br>'; 
} 



#menghapus data
echo "<hr>";
echo "array menghapus data = <br><br>";
$data=array("nama"=>"Andi", 
                    "nisn"=>"98765665845", 
                    "kelas"=>"XI RPL 1"); 
 
unset($data["nisn"]);//menghapus data nisn 
 
foreach ($data as $dt){     
    echo $dt.'<br>'; 
} 

                         

#merubah data

echo "<br><hr>";
echo "array mengubah data = <br> <br>";
$data=array ("nama"=>"Andi",
             "nisn"=>"98765665845",
             "Kelas"=>"XI RPL 1");

$data["nama"]="Budi";// merubah data

foreach($data as $dt){ 
    echo $dt."<br>";
}

?>