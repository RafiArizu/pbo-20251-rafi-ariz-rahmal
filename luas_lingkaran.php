<?php

class LuasLingkaran{

    public int $jari_jari;
    public const PHI = 3.14;

}

$linkgaran = new LuasLingkaran();

$linkgaran->jari_jari = 10;

$rumus = LuasLingkaran::PHI * ($linkgaran->jari_jari * $linkgaran->jari_jari);


echo "Hasilnya Adalah: " . $rumus;



?>