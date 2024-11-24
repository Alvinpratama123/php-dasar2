<?php
interface aturNamakampus {
    public function tampilNama();
}

class Dosen implements aturNamakampus {
    public $namaDosen;

    public function tampilNama() {
        echo "Nama Dosen: " . $this->namaDosen . "<br>";
    }
}

class Karyawan implements aturNamakampus {
    public $namaKaryawan;

    public function tampilNama() {
        echo "Nama Karyawan: " . $this->namaKaryawan . "<br>";
    }
}

// Membuat objek Dosen
$dosen = new Dosen();
$dosen->namaDosen = "Muhammad Alvin";
$dosen->tampilNama();

// Membuat objek Karyawan
$karyawan = new Karyawan();
$karyawan->namaKaryawan = "Andriyan";
$karyawan->tampilNama();
