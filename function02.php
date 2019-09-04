<?php
function cetak_ganjil ($awal,$akhir){
    for ($i=$awal; $i < $akhir ; $i++) { 
        if ($i%2 == 1) {
            echo "$i";
        }
    }
}
//PEmanggilan FUngsi
$a =10;
$b =50;

echo "<b>Bilangan Ganjil DAri $a sampai $b</b><br>";
cetak_ganjil($a,$b);

//optional parameter
function perkenalan2($nama = "Aang")
{
    echo "Nama saya : $nama";
}
echo"<hr>";
$a = "saka";
perkenalan2();
?>