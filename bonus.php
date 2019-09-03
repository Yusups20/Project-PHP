<?php

$aso   = [
    [
        "volvo" => "<li>volvo",
        "22"    => "<li>22",
        "23"    => "<li>18",
    ],
    [
        "volvo" => "<li>BMW",
        "22"    => "<li>15",
        "23"    => "<li>13",
    ],
    [
        "volvo" => "<li>SAAB",
        "22"    => "<li>5",
        "23"    => "<li>2",
    ],
    [
        "volvo" => "<li>LAND OVER",
        "22"    => "<li>17",
        "23"    => "<li>15",
    ],
];
echo "<br>";
foreach ($aso as $value) {
    echo "<p>";
    echo "<strong> Data Mobil "."<br></strong>";
    echo$value["volvo"] ."<br>";
    echo$value["22" ] ."<br>";
    echo$value["23" ] ."<br>";
   
}

?>