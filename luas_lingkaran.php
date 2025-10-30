<?php

class LuasLingkaran{

    public const PHI = 3.14;

    public int $jari_jari;


    public function __construct($JariValue = 1){
        echo "Kasih Paham BUB! <br>";
        $this->jari_jari = $JariValue;
    }

    public function tampil($nama = 'ban'){
        $rumus = LuasLingkaran::PHI * ($this->jari_jari * $this->jari_jari); // this berfungsi untuk memanggil langsung variabel yang menggunakan function
        echo "Lingkaran {$nama} Hasilnya Adalah: {$rumus}";
    }

    public static function testing(){
        echo"<br/>";
        echo "Ini Testing Static Woi";
    }

    public function __destruct(){
        echo"<br>";
        echo"Hi Salam Kenal";
    }

}

$linkgaran = new LuasLingkaran();
// $linkgaran->jari_jari = 10;
// $rumus = LuasLingkaran::PHI * ($linkgaran->jari_jari * $linkgaran->jari_jari);
// echo "Hasilnya Adalah: " . $rumus;


// cara panggil function
$linkgaran->tampil("Roda");

// Cara panggil function static
LuasLingkaran::testing();


//test_komen



?>