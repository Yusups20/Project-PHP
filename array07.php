<?php
$arrNilai = array ("ani" => 80,"otim" => 90,"sri" => 75,"budi" => 85);
echo "<b>Array Sebelum Pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort ($arrNilai);
reset ($arrNilai);
echo ("<b>Array Setelah Pengurutan Dengan Asort()</b>");
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort ($arrNilai);
reset ($arrNilai);
echo ("<b>Array Setelah Pengurutan Dengan Arsort()</b>");
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>