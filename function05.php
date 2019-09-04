<?php
function tambah_string(&$str){
    $str = $str . ", JAKARTA";
    return $str;
}
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";
?>