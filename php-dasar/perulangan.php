<?php

$userLengkap = [
    [
        "nama" => 'afif',
        "umur" => 30,
        "alamat" => 'semarang' // Perbaikan typo "alamt" menjadi "alamat"
    ],
    [
        "nama" => 'eko',
        "umur" => 31,
        "alamat" => 'jambi'
    ],
    [
        "nama" => 'hadi',
        "umur" => 32,
        "alamat" => 'bandung'
    ],
];
foreach($userLengkap as $user){
    if($user['alamt'] != "semarang"){
    echo "<br> Nama: " . $user['nama'];
    echo "<br> umur: " . $user['umur'];
    echo "<br> alamat: " . $user['alamat'];
    echo "<br>";
    }
}