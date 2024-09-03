<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float 
{
    $keliling = 3.14*$jari*2;
    return $keliling;
}

function volumeBola($jari) : float
{
    $volume = (4/3) * 3.14 * $jari**3;
    return $volume; 
}

function volumeTabung($jari, $tinggi) : float
{
    $volume = luasLingkaran($jari) * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float
{
    $volume = (1/3) * volumeTabung($jari, $tinggi);
    return $volume; 
}


$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$keliling_ling = kelilingLingkaran(45);
echo "Keliling tanah Budi adalah {$keliling_ling}\n";

$vol_bola = volumeBola(45);
echo "Volume bola Weny adalah {$vol_bola}\n";

$vol_tabung = volumeTabung(12, 20);
echo "Volume tabung Weny adalah {$vol_tabung}\n";

$vol_kerucut = volumeKerucut(14,23);
echo "Volume Kerucut tersebut adalah {$vol_kerucut}";
