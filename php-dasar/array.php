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

// Menggunakan looping foreach untuk menampilkan semua data
foreach ($userLengkap as $user) {
    echo "<br> Nama: " . $user['nama'];
    echo "<br> Umur: " . $user['umur'];
    echo "<br> Alamat: " . $user['alamat'];
    echo "<br>-------------------------";
}
?>
