<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

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

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    
    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

//Membuat Object nasi_tumpeng
$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume dari nasi tumpeng tersebut adalah {$nasi_tumpeng->volume()} cm^3\n";

//Membuat Object dari Class Lingkaran
$kls_lingkaran = new Lingkaran(14);
echo "Luas lingkaran tersebut adalah {$kls_lingkaran->luas()} cm^2\n";
echo "Keliling lingkaran tersebut adalah {$kls_lingkaran->keliling()} cm\n";

//Membuat Kode Implementasi Bola
$bola = new Bola(7);
echo "Volume bola Susanto adalah {$bola->volume()} cm^3\n";

//Membuat Kode Implementasi Tabung
$tabung = new Tabung(5, 10);
echo "Volume tabung Andi adalah {$tabung->volume()} cm^3\n";

//Membuat Kode Implementasi Kerucut
$kerucut = new Kerucut(8, 15);
echo "Volume Kerucut Zahra adalah {$kerucut->volume()} cm^3\n";