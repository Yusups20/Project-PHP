<html>
<head><title>Latihan Form 2</title></head>
<form ACTION="" METHOD="GET" NAME="InputData">
<pre>
Masukan Bilangan Bintang :<input type="number" name="bintang"><br>
<input type="submit" name="InputData" value="Masuk">
</html>

<?php
if (isset($_GET['InputData'])) {
$bintang    = $_GET['bintang'];
echo"<pre>";
echo "<b>Bintang</b><br>";
for ($i=0; $i < $bintang ; $i++) { 
    echo "*";
}
echo "<hr>";
echo "<br>";
echo "<b>Bintang Piramid</b><br>";
for ($i=1; $i <= $bintang; $i++) {
    for ($x=$bintang; $x >= $i; $x--) {
       echo "&nbsp;";
    } 
    for ($n=1; $n <= $i; $n++) { 
        echo "* ";
    }
    echo "<br>";
}
echo "<hr><br>";
echo "<b>Bintang Piramid Terbalik</b><br>";
for ($i=$bintang; $i >= 1; $i--) {
    for ($x=$bintang; $x >= $i; $x--) {
       echo "&nbsp;";
    } 
    for ($n=1; $n <= $i; $n++) { 
        echo "* ";
    }
    echo "<br>";
}
echo "<hr>";
echo "<b>Bintang Belah Ketupat</b><br>";
for ($i=1; $i <= $bintang; $i++) {
    for ($x=$bintang; $x >= $i; $x--) {
       echo "&nbsp;";
    } 
    for ($n=1; $n <= $i; $n++) { 
        echo "* ";
    }
    echo "<br>";
}
for ($i=$bintang; $i >= 1; $i--) {
    for ($x=$bintang; $x >= $i; $x--) {
       echo "&nbsp;";
    } 
    for ($n=1; $n <= $i; $n++) { 
        echo "* ";
    }
    echo "<br>";
}echo "<hr>";
echo "Total Bintang     = ".$bintang;
}