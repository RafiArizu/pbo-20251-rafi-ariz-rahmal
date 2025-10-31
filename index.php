<?php

require_once('./luas_lingkaran.php');

use App\math\LuasLingkaran;

$linkgaran = new LuasLingkaran();
// $linkgaran->jari_jari = 10; // input nilai jari-jari
// $rumus = LuasLingkaran::PHI * ($linkgaran->jari_jari * $linkgaran->jari_jari);
// echo "Hasilnya Adalah: " . $rumus;


// cara panggil function
$linkgaran->tampil2(10);
$linkgaran->tampil("Roda");



?>