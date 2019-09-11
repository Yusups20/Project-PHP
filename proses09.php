<?php
if (isset($_POST['Proses'])) {
    //new line break nl2br
$saran = nl2br($_POST['saran']);
echo "Kritik / Saran Anda adalah : <br>";
echo "<font color=blue><b>$saran</b></font>";
}
?>