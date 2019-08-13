<?php
$nim = "0411500400";
$nama = 'Yusup Supratman';
$umur = 15;
$nilai = 82.25;
$status = TRUE;

echo "NIM : " . $nim ."<br>";
echo "NAma : $nama<br>";
print "umur : " .$umur; print "<br>";
printf ("Nilai : %.3f<br>",$nilai);
if ($status)
echo '<h1 style="color : green">"Status : Aktif" </h1>';
else
echo "Status : Tidak AKtif";
?>