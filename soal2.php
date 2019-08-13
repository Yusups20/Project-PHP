<?php
$sewa  = 375000;
$denda = 25000 ;
$total_bayar = 625000;
$a = $total_bayar - $sewa;
$y = $a / ($denda / 2) ;

echo "Denda = Rp. ". $a;
echo "<br>kelebihan jam = ". $y . "jam";
echo "<br>Total JAm = " .($y + 24)."jam";
?>