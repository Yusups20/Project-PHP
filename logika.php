<?php
$gol = 3;

if ($gol >= 10){
    echo "mendali emas , dengan total cetak gol : ".$gol;
}elseif ($gol > 7) {
    echo "mendali perak , dengan total cetak gol : ".$gol;
}elseif ($gol >= 4) {
    echo "mendali perunggu , dengan total cetak gol :".$gol;
}elseif ($gol < 4) {
    echo "mendali emas ngambang , dengan total cetak gol :".$gol;
}
switch ($gol) {
    case 20:
        echo "<p>dan mendapatkan bonus 100 juta";
        break;
    case 9:
        echo "<p>dan mendapatkan bonus 80 juta";
        break;
    case 5:
        echo "<p>dan mendapatkan bonus 50 juta";
        break;
    case 3:
        echo "<p>dan tidak mendapatkan bonus";
        break;
    default:
        echo "tidak ada jawaban";
        break;
}
?>