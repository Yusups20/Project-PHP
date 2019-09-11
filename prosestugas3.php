<?php

echo "<pre>";
echo "<h3 align='right'>". date("d/m/Y H:i:s")."</h3>";

if (isset($_POST['InputData'])) {
    $nama    = $_POST['nama'   ];
    $nip     = $_POST['nip'    ];
    $alamat  = $_POST['alamat' ];
    $jurusan = $_POST['jurusan'];
    $status  = $_POST['stat'   ];
    $jab     = $_POST['jabatan'];
    $golongan= $_POST['gol'   ];
    echo"<pre>";
    echo "<b>INFO DATA SISWA </b> <br>";
    echo "Nama                     :".$nama. "<br>";
    echo "NIP                      :".$nip. "<br>";
    echo "Jenis Kelamin            :".$jurusan. "<br>";
    echo "Alamat                   :".$alamat. "<br>";
    echo "Status                   :".$status. "<br>";
    echo "Jabatan                  :".$jab. "<br>";

    }
    if (isset($_POST['InputData'])) {
    echo "Potongan                 :";
        if (isset($_POST['pot1'])) {
        echo "" . $_POST['pot1'] . "<br>";
        }
        if (isset($_POST['pot2'])) {
        echo "" . $_POST['pot2'] . "<br>";
        }
        if (isset($_POST['pot3'])) {
        echo "" . $_POST['pot3'] . "<br>";
        }
    echo "Golongan                 :".$golongan. "<br>";
    }
    echo "<br>";
    echo "<hr><br>";
    echo"<b>Keterangan :</b>";
    echo"<br>";
    if ($golongan=="A1") {
        $golongan = 250000;
        echo "Golongan A1   : 250.000";
    }elseif ($golongan=="A2") {
        $golongan = 200000;
        echo "Golongan A2   : 200.000";
    }elseif ($golongan=="A3") {
        $golongan = 150000;
        echo "Golongan A3   : 150.000";
    }
    echo "<br>";
    if ($status=="Menikah") {
        $status = 100000;
        echo "Menikah       : 100.000";
    }elseif ($status=="BelumMenikah") {
        $status = 50000;
        echo "belummenikah  : 50.000";
    }
    echo"<br>";
    if ($jab=="HRD") {
        $jab = 5000000;
        echo "HRD           : 5Jt";
    }elseif ($jab=="Manager") {
        $jab = 4500000;
        echo "Manager       : 4.5Jt";
    }elseif ($jab=="Staff") {
        $jab = 3000000;
        echo "Staff         : 3Jt";
    }elseif ($jab=="Karyawan") {
        $jab = 2500000;
        echo "Karyawan      : 2.5Jt";
    }
    echo "<br>";
    if ("BPJS") {
        $potong1 = 250000;
        $potong = $potong1;
        echo "Potongan BPJS : 250.000";
    }elseif ("Koperasi") {
        $potong2 = 150000;
        $potong = $potong2 + $potong1;
        echo "Potongan Koperasi : 150.000";
    }if ("Jamsostek") {
        $potong3 = 150000;
        $potong = $potong3 + $potong2 + $potong1;
        echo "Potongan Jamsostek : 150.000";
    }
    
    if (isset($_POST['InputData'])) {
            if (isset($_POST['BPJS'])) {
            echo "BPJS : 250rb";
            }
            if (isset($_POST['Koperasi'])) {
            echo "Koperasi : 150rb";
            }
            if (isset($_POST['Jamsostek'])) {
            echo "Jamsostek : 150rb";
            }
        }
    echo "<br>";
    echo "Gaji Kotor    =  ";
    echo "".($golongan+$status+$jab)-$potong;
    $gajikotor = ($golongan+$status+$jab)-$potong;
    echo "<br>";
    $pajak = $gajikotor * 2.5/100;
    echo "Gaji Bersih   =  ";
    echo "".$gajikotor-$pajak;
    

?>