<?php
$loop = 10;
$num  = 1;
for ($i=0; $i <= $loop ; $i++) { 
    if ($i == 1) {
        echo "1 * 1 = " .$num++;
    }elseif ($i == 2) {
        echo "<p>1 * 2 = " .$num++;
    }elseif ($i == 3) {
        echo "<p>1 * 3 = " .$num++;
    }elseif ($i >= 4 && $i <= 6) {
        echo "<p>1 * 4 = " .$num++;
    }elseif ($i >= 7 && $i <= 9) {
        echo "<p>1 * 5 = " .$num++;
    }elseif ($i >= 10) {
        echo "<p>1 * 6 = " .$num++;
    }
    
}
?>