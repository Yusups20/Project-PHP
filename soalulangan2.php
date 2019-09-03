<?php
$indo  = 80 ;
$mtk   = 70 ;
$rata  = 75 ;
$nilai = 100;

echo "Nama  : Yusup Supratman<br>";
echo "Kelas : XI-RPL 2<br>"."<br>";
echo "<hr>";

echo "NIlai B.indonesia     :  80<br>";
echo "NIlai Matematika      :  70<br>";
echo "NIlai NIlai Rata Rata :  75<br>";
echo "NIlai Keterangan      :  LULUS<br>";

if ($nilai > 100) {
    echo "Maaf Nilai Anda Tidak Sesuai :("."<br>";
}elseif ($nilai <= 0) {
    echo "Maaf Nilai Anda Tidak Sesuai :("."<br>";
}elseif ($nilai > 85) {
    echo "Grade A :)";
}elseif ($nilai >= 75) {
    echo "Grade B :)";
}elseif ($nilai >= 60) {
    echo "Grade C :)";
}elseif ($nilai < 60) {
    echo "Grade D :(";
}
?>