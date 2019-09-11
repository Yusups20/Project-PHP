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

for ($i=1; $i <= $bintang; $i++) {
    for ($n=1; $n <= $i; $n++) { 
        echo "*&nbsp ";
    }
    for ($x=$bintang; $x >= $i; $x--) {
       echo "&nbsp;";
    } 
    echo "<br>";
}
}
?>