<?php

class Buah
{

    public $nama;
    public $warna;

    function tampilDeskripsi($parameter)
    {
        echo "nama Buah : $this->nama <br> warna :  $this->warna <br> Bagaimana Rasanya : $parameter";

    }
    function aturWarna($warnaBaru)
    {
    $this->warna = $warnaBaru;
    }

}

$apel = new Buah();
$apel->nama = "apel";
$apel->warna = "merah";

$apel->aturwarna("orange");
$aple->tampilDeskripsi("Enak sekali");