<?php
if (isset($_POST['Pilih'])) {
$film = $_POST['kartun'];
echo "Film Kartun Favorit Anda adalah :
<font color=red><b>$film</b></font>";
}
?>