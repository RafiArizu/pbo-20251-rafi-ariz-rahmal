<?php

class LuasLingkaran{

    public const PHI = 3.14;

    private int $jari_jari;


    // private masuk ke dalam public function di bungkus
    public function __construct($JariValue = 1){
        echo "Kasih Paham BUB! <br>";
        $this->jari_jari = $JariValue;
    }

    public function tampil($nama = 'ban'){
        $rumus = LuasLingkaran::PHI * ($this->jari_jari * $this->jari_jari); // this berfungsi untuk memanggil langsung variabel yang menggunakan function
        echo "Lingkaran {$nama} Hasilnya Adalah: {$rumus}";
    }

    public function tampil2($isijari = 1){
        $this->jari_jari = $isijari;
    }

    public static function testing(){
        echo"<br/>";
        echo "Ini Testing Static Woi";
    }

    // public function __destruct(){
    //     echo"<br>";
    //     echo"Hi Salam Kenal";
    // }

}

$linkgaran = new LuasLingkaran();
// $linkgaran->jari_jari = 10; // input nilai jari-jari
// $rumus = LuasLingkaran::PHI * ($linkgaran->jari_jari * $linkgaran->jari_jari);
// echo "Hasilnya Adalah: " . $rumus;


// cara panggil function
$linkgaran->tampil2(10);
$linkgaran->tampil("Roda");


// Cara panggil function static
LuasLingkaran::testing();




?>