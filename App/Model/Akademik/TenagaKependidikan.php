<?php
namespace App\Model\Akademik;

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti(): void {
        echo "Tenaga Kependidikan sedang cuti";
    }
}