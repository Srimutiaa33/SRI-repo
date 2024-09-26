<?php
//buatkan aplikasi untuk menentukan bilangan genap atau ganjil 
//Algoritma
//1. inisialaisasi variabel bilangan
//2. modulus bilangan denagan 2
//3. jika hasil modulus sama dengan 0 maka bilangan genap
//4. juka tidak maka bilangan ganjil

$bilangan=60;

$hasil=$bilangan%2;

if($hasil==0){
    echo"bilangan genap";
}else{
    echo"bilangan ganjil";
}