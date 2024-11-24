<?php

class hewan{
    public $nama;
    public $warna;
    function __construct($namaBaru,$warnaBaru){
        $this->nama = $namaBaru;
        $this->warna = $warnaBaru;
    
    }

}


$kucing = new hewan("kucing", "merah");

echo $kucing->nama;