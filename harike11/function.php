<?php

#function tanpa argument
function cetak(){
    echo "<br>";
    echo"function tanpa argument : <br><br>",
         " <b>KATA-KATA MOTIVASI HARI INI :</b> <br><br>",
        "1.) Jangan berharap masalahmu akan dimudahkan, namun berharaplah kamu akan jadi orang yang lebih kuat.<br>",
        "2.) Ketika kamu merasa kehilangan harapan, ingat bahwa Tuhan telah menciptakan rencana terindah untuk hidup kita.<br>",
        "3.) Tidak ada istilah gagal dalam hidup, yang ada hanya sukses dan belum berhasil.<br>";
    echo"<br>";
}

cetak("");



#function tiga argument
echo "<br><hr><br>";
echo"function tiga argument : <br><br>";
function data($nama,$tahun,$tempatTinggal){
    $umur=date("Y")-$tahun;
    echo "Hallo nama saya = $nama,umur saya = $umur tahun,tempat tinggal saya = $tempatTinggal <br>";
    echo "<br>";
}

data("Rara",2008,"bandung.");
data("Desi",2009,"surabaya.");
data("laila",2010,"jakarta.");



#membuat funtion yg mengembalikan nilai return value
echo "<br> <hr><br>";
echo "function yg mengembalikan nilai : <br><br>";
function jumlah ($bil1,$bil2){
    return $bil1+$bil2;
}
echo jumlah(10,3)."<br>";
echo jumlah(5,3)."<br>";
$jum=jumlah(20,4);
echo $jum;

?>