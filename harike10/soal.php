<?php
//membuat array multidemensi untuk persegi panjang
$persegi_panjang=array(
    array("persegi panjang"=>"persegi 1", "panjang" =>"56", "lebar"=>"23"),
    array("persegi panjang"=>"persegi 2", "panjang" =>"33", "lebar"=>"21"),  
    array("persegi panjang"=>"persegi 3", "panjang" =>"65", "lebar"=>"42"), 
    array("persegi panjang"=>"persegi 4", "panjang" =>"73", "lebar"=>"29")); 
    
foreach($persegi_panjang as $hasil ){
     $luas= $hasil["panjang"]* $hasil["lebar"];
     echo $hasil["persegi panjang"]."--"." panjang--".$hasil ["panjang"]."--"." lebar --" .$hasil["lebar"]. "--luas:".$luas."<br>";
}



echo "<hr>";
#menggunakan json_encode
$persegi_panjang=array(
                 array("persegi panjang"=>"persegi1","panjang" =>"56","lebar"=>"23"),
                 array("persegi panjang"=>"persegi2","panjang" =>"33","lebar"=>"21"),  
                 array("persegi panjang"=>"persegi3","panjang" =>"65","lebar"=>"42"), 
                 array("persegi panjang"=>"persegi4","panjang" =>"73","lebar"=>"29")); 
                 
    foreach($persegi_panjang as $hasil => $persegi){
      $persegi_panjang[$hasil]["luas"]=$persegi_panjang[$hasil]["panjang"]* $persegi_panjang[$hasil]["lebar"];


    }
        $jsonData=json_encode($persegi_panjang,JSON_PRETTY_PRINT); 
        echo "<pre>".$jsonData."</pre>"; 

?> 