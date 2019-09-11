<?php
if (isset($_POST['InputData'])) {
$nama    = $_POST['nama'   ];
$nis     = $_POST['nis'    ];
$alamat  = $_POST['alamat' ];
$jurusan = $_POST['jurusan'];
$agama   = $_POST['agm'];
$asal    = $_POST['asal'    ];
$ortu    = $_POST['ortu'    ];
$totalnilai= $_POST['totalnilai'];
$email    = $_POST['email'    ];
echo"<pre>";
echo "<b>INFO DATA SISWA </b> <br>";
echo "Nama                     :".$nama. "<br>";
echo "NIS                      :".$nis. "<br>";
echo "Alamat                   :".$alamat. "<br>";
echo "Jenis Kelamin            :".$jurusan. "<br>";
echo "Agama                    :".$agama. "<br>";
echo "Asal Sekolah             :".$asal. "<br>";
echo "Nama Orang Tua/Wali      :".$ortu. "<br>";
}
if (isset($_POST['InputData'])) {
    echo "Pelajaran Yang Di Sukai  :";
    if (isset($_POST['band01'])) {
    echo "-> " . $_POST['band01'] . "<br>";
    }
    if (isset($_POST['band02'])) {
    echo "                          -> " . $_POST['band02'] . "<br>";
    }
    if (isset($_POST['band03'])) {
    echo "                          -> " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
    echo "                          -> " . $_POST['band04'] . "<br>";
    }
    if (isset($_POST['band05'])) {
    echo "                          -> " . $_POST['band05'] . "<br>";
    }
    echo "Total Nilai Ijasah SMK   :".$totalnilai. "<br>";
    echo "Email                    :".$email. "<br>";
}
if ($totalnilai >= 23) {
    echo "Status : LULUS :)";
}elseif ($totalnilai < 23) {
    echo "Status : TIDAK LULUS :(";
}
?>