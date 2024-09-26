<?php

testLeapYear(2024);
function leapYear(int $year):bool{
    
    if($year % 4 ==0)
    if($year % 100 == 0)
    if($year % 400 == 0)
        return true;
    else
        return false;
    else
        return true;
    else
        return false;
}  

function testLeapYear(int $year){
    $result= leapYear($year);
    if($result)
        echo "Tahun $year adalah Tahun Kabisat<br>";
    else
        echo "Tahun $year bukan Tahun Kabisat<br>";

}

?>


