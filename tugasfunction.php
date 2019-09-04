<?php
function segitiga($alas,$tinggi,$luas)
{
    echo "<b>SEGITIGA</b><br>";
    echo "Alas Segitiga Adalah : $alas<br>";
    echo "Tinggi Segitiga Adalah : $tinggi<br>";
    echo "MAka Hasil Luas Segitiga : $luas<br>";
}
$a = 10;
$t = 20;
$luas = (($a*$t)/2);
segitiga($a,$t,$luas);

echo "<br>";

function Lingkaran($jari=8)
{
    echo "<b>LINGKARAN</b><br>";
    echo " jari-jari lingkaran : $jari<br>";
    $luas = 3.14 * ($jari*$jari);
    $kel  = 2*(3.14*$jari);
    echo "Luas Lingkaran = $luas<br>";
    echo "Keliling Lingkaran = $kel";
}
$a = 10;
Lingkaran($a);
?>