<?php

trait Gelar
{
    public function gelardosen()
    {
        return "S.Kom, M.Kom";
    }
}

class Dosen 
{
    use Gelar;

    public $namaDosen;
}

$dosen = new Dosen();
$dosen->namaDosen = "Muhammad Alvin";

echo "Nama Dosen: $dosen->namaDosen, Gelar: " . $dosen->gelardosen();
