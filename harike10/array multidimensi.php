<?php

#4 array 3 dimensi
$data=array( array("nama"=>"Andi","nisn"=>"98765665845", "kelas"=>"XI RPL 1"),                         
             array("nama"=>"Budi","nisn"=>"98723465812", "kelas"=>"XI RPL 1"),                         
             array("nama"=>"Candra","nisn"=>"98125665437","kelas"=>"XI RPL 2"),                         
             array("nama"=>"Dedi","nisn"=>"99346567563", "kelas"=>"XI RPL 2")); 

    foreach ($data as $dt){
        echo $dt["nama"].'--'.$dt["nisn"]."--".$dt["kelas"]."<br>";
    
    }




#menggunkan json_encode
    $data=array( array("nama"=>"Andi","nisn"=>"98765665845", "kelas"=>"XI RPL 1"),                         
             array("nama"=>"Budi","nisn"=>"98723465812", "kelas"=>"XI RPL 1"),                         
             array("nama"=>"Candra","nisn"=>"98125665437", "kelas"=>"XI RPL 2"),                         
             array("nama"=>"Dedi","nisn"=>"99346567563", "kelas"=>"XI RPL 2")); 


$jsonData=json_encode($data,JSON_PRETTY_PRINT); 
echo "<pre>".$jsonData."</pre>"; 

?>