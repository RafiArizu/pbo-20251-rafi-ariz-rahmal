<?php

class LuasLingkaran{

    public const PHI = 3.14;

    public int $jari_jari;


    public function tampil($nama = 'ban'){
        $rumus = LuasLingkaran::PHI * ($this->jari_jari * $this->jari_jari); // this berfungsi untuk memanggil langsung variabel yang menggunakan function
        echo "Lingkaran {$nama} Hasilnya Adalah: {$rumus}";
    }

    public static function testing(){
        echo"<br/>";
        echo "Ini Testing Static Woi";
    }

   

}

$linkgaran = new LuasLingkaran();
$linkgaran->jari_jari = 10;


// cara panggil function
$linkgaran->tampil("Roda");

// Cara panggil function static
LuasLingkaran::testing();




?>