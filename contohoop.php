<?php
class Mobil{

    public $warna = 'Merah'; //String
    public $berat=1.570 ; //Boolean
    public $jumlah = '10'; //int
    public $plat_no = 'AD377SZ'; //String
    public $benar=true;  //Float
    public $salah=false; //Float

    public function berjalan() //method
    {
        return "Berjalan Melewati jalan tol";
    }
    public function melaju() //method
    {
        return "<br>Dengan Kecepatan 80KM";
    }
    public function berhenti() //method
    {
        return "<br>Berhenti Melakukan Isi Bensin";
    }
    public function membawa() //method
    {
        return "<br>Membawa Sopir dan penumpang";
    }
    public function tujuan($var , $var2) //method
    {
        return "<br>Mobil Bertujuan Untuk Menuju Jakarta ".$var.'dan Bandung'.$var2;
    }
}
    $motor = new Mobil;
    echo "Mobil ".$motor->warna;
    echo '<br>Dengan Berat '.$motor->berat;
    echo '<br>Plat Nomer '.$motor->plat_no;
    echo '<br>'.$motor->berjalan();
    echo '<br>'.$motor->melaju();
    echo '<br>'.$motor->berhenti();
    echo '<br>'.$motor->membawa();
    echo '<br>'.$motor->tujuan($var,$var2);
    echo '<br>'.$motor->benar;
    
?>