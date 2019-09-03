<?php
$arrBuah = array ("Mangga", "Apel", "Pisang", "Jeruk");
echo $arrBuah[0]; //Mangga
echo $arrBuah[3]; //Jeruk
$arrWarna = array();
$arrWarna[] = "Merah";
$arrWarna[] = "Biru";
$arrWarna[] = "Hijau";
$arrWarna[] = "Putih <br>";

echo $arrWarna[0]; //Merah
echo $arrWarna[2]; //Hijau
echo "<br>";
$arrWarna = array ("Grey","Black","Red","Yellow","Green");
echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++) {
echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]
."</font> ?<br>";
}
echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
echo "Do you like <font color=$warna>". $warna ."</font>
?<br>";
}

$a = array('Ahmad',19,true,3.19);
// Menampilkan Array Satu Persatu
echo "Array Menggunakan Echo<br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo "<br>";
echo "Array Menggunakan LOoping For <br>";
for ($i=0; $i < count($a); $i++) { 
    echo "Array -> " .$a[$i]. "<br>";
}
echo "<br>";
?>