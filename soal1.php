<?php

$hrg_jambu = 15000;
$dus       = 6;
$weight    = 5;
$hrg_dus   = 2000;
$jambu     = ($hrg_jambu * $dus) * $weight;
$jumlah    = $dus * $hrg_dus;
$total     = $jambu+$jumlah;

echo "PEnjualan Seluruh JAmbu Adalah                   = Rp. ".($hrg_jambu * $dus) * $weight;
echo "<br> HArga Dus setelah di jual adalah            = Rp. " .$dus * $hrg_dus;
echo "<br>Total Penjualan Seluruh JAmbu Dan Dus Adalah = Rp. ".$total;
?>