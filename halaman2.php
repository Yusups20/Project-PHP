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
<h2>Menghitung Luas Lingkaran</h2>
    <form action="" method="post">
    Masukan Jari-Jari   : <input type="number" name="jari"   required><br>
    <input type="submit" name="submit" value="submit">
    <button><a href="hal1.php"></a>Back</button></form>
<?php
    if (isset($_POST['submit'])) {
        $a = $_POST['jari'];
        function lingkaran($jari , $luas ,$kl){
            echo "<h1>Luas Lingkaran</h1><br>";
            echo "Jari Jari : $jari<br>";
            echo "Luas Lingkaran : $luas<br>";
            echo "KEliling Lingkaran : $kl<br>";
        }
        echo"<hr>";
        $r = 8;
        $phi = 3.14;
        $luas = $phi*($r*$r);
        $kl = 2*($phi*$r);
        lingkaran($r,$luas,$kl);
    }
?>
</body>
</html>