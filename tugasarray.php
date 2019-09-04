<?php
$transport = [
    ['Nama :' => 'Ujang', 'Kelas :' => 'TKR1' , "Alamat :" => "Bandung"],
    ['Nama :' => 'Mahmud', 'Kelas :' => 'RPL2' , "Alamat :" => "Jakarta"],
    ['Nama :' => 'Ucok', 'Kelas :' => 'TSM3' , "Alamat :" => "Kalimantan"],
];
echo "<pre>";
print_r ($transport);
echo "</pre>";

// $mode = current($transport[2]);
// echo $mode."<br>"; 
// $mode = current($transport[1]);
// echo $mode."<br>"; 
// $mode = key($transport);
// echo $mode."<br>"; 
// $mode = reset($transport);
// echo $mode."<br>"; 
// $mode = next($transport);
// echo $mode."<br>";

foreach ($transport as $b => $c) {
    echo "$c [Nama :] , $c [Kelas :] , $c [Alamat :]";
}
?>