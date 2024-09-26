<?php

for($i=1;$i<=3;$i++){
    echo "perulangan i ke-$i";
    for ($k=1;$k<=2;$k++){
        echo $k;
    } 
    echo "<br>";
}

echo "<hr>";
for($i=17;$i>=1;$i--){
    //echo "perulangan i ke-$i";
    for ($k=1;$k<=$i;$k++){
        echo "*";
    } 
    echo "<br>";
}

?>