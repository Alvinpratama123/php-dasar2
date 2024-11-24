<?php


class Buah
{
    public $bana;
    public $warna;

}

$apel = new Buah();
$apel->nama ="apel";
$apel->warna = "merah";

echo "nama Buah : " . $apel->nama;
echo "<br> warna Buah : ". $apel->warna;

$pisang = new Buah();
$pisang->nama ="pisang";
$pisang->warna = "kuning";

echo "nama Buah : " . $pisang->nama;
echo "<br> warna Buah : ". $pisang->warna;
