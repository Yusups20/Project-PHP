<?php

if (isset($_POST['sbm'])) {
    
    $angka = $_POST['bilangan'];
    $pangkat = $_POST['pangkat'];
    $number= $_POST['jabatan'];
    $number2=0;
    $nama    = $_POST['nama'   ];
    $pengarang     = $_POST['pengarang'    ];
    $alamat  = $_POST['alamat' ];
    $jurusan = $_POST['jurusan'];
    $status  = $_POST['tgl'   ];
    $golongan= $_POST['jml'   ];
    echo"<pre>";
    echo "<b>INFO DATA SISWA </b> <br>";
    echo "Nama                     :".$nama. "<br>";
    echo "Jenis Kelamin            :".$jurusan. "<br>";
    echo "Alamat                   :".$alamat. "<br>";
    echo "Tanggal Pembelian        :".$status. "<br>";
    echo "Jumlah Buku              :".$golongan. "<br>";
    echo "Judul  Buku              :".$angka. "<br>";
    echo "Kode   Buku              :".$pangkat. "<br>";
    echo "Pengarang Buku           :".$pengarang. "<br>";
    echo "Jenis  Buku              :".$jabatan. "<br>";
    
    
}
    
    for ($a=0; $a < count($angka); $a++) { 
        for ($z=1; $z <= $pangkat[$a]; $z++) { 
            echo $angka[$a];
            if ($z < $pangkat[$a]) {
                echo "Judul Buku : ".$angka;
            }
        }
        $hasil = pow($angka[$a], $pangkat[$a]);
        echo " = " . $hasil . " -> ";
        if ($hasil % 2 == 1) {
            echo "Bilangan Ganjil";
        } else {
            echo "Bilangan Genap";
        } echo "<hr>";
    }
?>