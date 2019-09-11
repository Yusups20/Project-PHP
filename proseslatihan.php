<?php
if (isset($_POST['Input'])) {
$nama1 = $_POST['nama1'];
$nama2 = $_POST['nama2'];
$nama3 = $_POST['nama3'];
$nama4 = $_POST['nama4'];

echo "<b>RAPOT KU :</b> <br>";
echo "<pre>";
echo "Nama   :".$nama1. "<br>";
echo "Kelas  :".$nama4. "<br>";
echo "Mapel1 :".$nama2. "<br>";
echo "Mapel2 :".$nama3. "<br>";


$a = ($nama2+$nama3)/2;
echo "Rata Rata : ".$a."<br>";
}
if ($a >= 75) {
    echo "Status : LULUS :)";
}elseif ($a < 75) {
    echo "Status : TIDAK LULUS :(";
}
?>