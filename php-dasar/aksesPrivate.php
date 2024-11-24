<?php

class Kampus {
    private $namaKampus = "Universitas Indonesia";
    private $alamatKampus;

    function operKeDosen() {
        return $this->namaKampus; // Properti yang benar
    }
}

class Dosen extends Kampus {
    public $namaDosen;

    function tampilNamakampus() {
        echo $this->operKeDosen(); // Menggunakan metode dari kelas induk
    }
}

$dosen = new Dosen();
$dosen->namaDosen = "Dr. Andi";
echo "Nama Dosen: $dosen->namaDosen<br>";
$dosen->tampilNamakampus();
