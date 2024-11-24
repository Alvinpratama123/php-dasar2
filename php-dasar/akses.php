<?php

class Kampus {
    public $nama;
    public $alamatkampus;
}

class Dosen extends Kampus {
    public $namaDosen;

    function aturNamakampus($namakampusbaru) {
        $this->nama = $namakampusbaru;
    }

    function tampilNamakampus() {
        echo "<br> Kampus: $this->nama";
    }
}

$dosen = new Dosen();
$dosen->namaDosen = "Afif";
$dosen->aturNamakampus("UGM");

echo "Nama Dosen: $dosen->namaDosen";
$dosen->tampilNamakampus();
