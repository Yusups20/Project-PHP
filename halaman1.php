<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<h2>Menghitung Luas Segitiga</h2>
    <form action="" method="post">
    Masukan Alas   : <input type="number" name="sisi"   required><br>
    Masukan Tinggi : <input type="number" name="tinggi" required><br>
    <input type="submit" name="submit" value="submit">
    <button><a href="hal1.php"></a>Back</button></form>
<?php
    echo "<hr>";
    if (isset($_POST['submit'])) {
        $a = $_POST['sisi'];
        $b = $_POST['tinggi'];
        function segitiga($a,$b){
            echo "<h1>Luas Segitiga</h1><br>";
            $c = $a * $b / 2;
            echo "$a * $b / 2 = $c";
        }
        segitiga($a,$b);
    }
?>
</body>
</html>