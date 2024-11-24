<?php

class Kampus {
    public $nama;
    public $alamat;

    public function tampilInfo() {
        echo "<br> Kampus: $this->nama";
        echo "<br> Alamat Kampus: $this->alamat";
    }
}

class Dosen extends Kampus {
    public $namaDosen;
}

// Membuat objek Dosen
$dosen = new Dosen();
$dosen->nama = "UGM";
$dosen->alamat = "Jogja";
$dosen->namaDosen = "Afif";

echo "Nama Dosen: $dosen->namaDosen";
$dosen->tampilInfo();
