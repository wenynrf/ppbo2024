<?php
namespace App\Model\Akademik;

class Pegawai {
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(): bool {
        return true;
    }

    public function cekOut(): bool {
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}
