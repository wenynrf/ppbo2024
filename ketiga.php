<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

//Membuat Object nasi_tumpeng
$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
$volume_nasi_tumpeng = $nasi_tumpeng -> volume();
echo "Volume dari nasi tumpeng tersebut adalah {$volume_nasi_tumpeng} cm^3\n";

//Membuat Object dari Class Lingkaran
$kls_lingkaran = new Lingkaran();
$kls_lingkaran->jari_jari = 14;
$luas_lingkaran = $kls_lingkaran->luas();
$keliling_lingkaran = $kls_lingkaran->keliling();
echo "Luas lingkaran tersebut adalah {$luas_lingkaran} cm^2\n";

echo "Keliling lingkaran tersebut adalah {$keliling_lingkaran} cm\n";

//Membuat Kode Implementasi Bola
$bola = new Bola();
$bola->jari_jari = 7;
$volume_bola = $bola->volume();
echo "Volume bola Susanto adalah {$volume_bola} cm^3\n";

//Membuat Kode Implementasi Tabung
$tabung = new Tabung();
$tabung->jari_jari = 5;
$tabung->tinggi = 10;
$volume_tabung = $tabung->volume();
echo "Volume tabung Andi adalah {$volume_tabung} cm^3\n";

//Membuat Kode Implementasi Kerucut
$kerucut = new Kerucut();
$kerucut->jari_jari = 8;
$kerucut->tinggi = 15;
$volume_kerucut = $kerucut->volume();
echo "Volume Kerucut Zahra adalah {$volume_kerucut} cm^3\n";