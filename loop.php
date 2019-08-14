<?php
$loop = 10;
$num  = 1 ;
for ($i=0; $i <= $loop ; $i++) { 
    if ($i == 1) {
        echo "<p>Aku Data Ke - " .$num++. "dan aku mendapatkan mendali emas";
    }elseif ($i == 2) {
        echo "<p>Aku Data Ke - " .$num++. "dan aku mendapatkan mendali perak";
    }elseif ($i == 3) {
        echo "<p>Aku Data Ke - " .$num++. "dan aku mendapatkan mendali perunggu";
    }elseif ($i >= 4 && $i <= 6) {
        echo "<p>Aku Data Ke - " .$num++. "dan aku mendapatkan mendali tas laptop";
    }elseif ($i >= 7 && $i <= 9) {
        echo "<p>Aku Data Ke - " .$num++. "dan aku mendapatkan mendali tas karung";
    }elseif ($i >= 10) {
        echo "<p>Aku Data Ke - " .$num++. "dan tidak mendapatkan apapun";
    }
    
}

?>