<?php

$userLengkap = [
    [
        "nama" => 'afif',
        "umur" => 30,
        "alamat" => 'semarang'
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


function tampilNama($nama, $umur)
{
    return "Nama saya: $nama, umur saya: $umur th<br>";
}


foreach ($userLengkap as $user) {
    echo tampilNama($user['nama'], $user['umur']);
}
?>
