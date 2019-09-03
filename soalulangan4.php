<?php

$aso   = [
    [
        "barang" => "Buku Tulis",
        "harga"  => "4000",
        "berat"  => "100 gram"
    ]
];
echo "<br>";
foreach ($aso as $value) {
    echo"barang :". $value["barang"] ."<br>";
    echo"harga  :". $value["harga" ] ."<br>";
    echo"berat  :". $value["berat" ] ."<br>";
    echo '<hr>';
}

?>