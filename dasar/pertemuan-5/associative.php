<?php
/*
Array associative
*/

$mahasiswa = [
  [
    "nama" => "rel",
    "nim" => "230495786",
    "prodi" => "informatika"
  ],

  [
    "nama" => "dendy",
    "nim" => "23049238929",
    "prodi" => "hukum"
  ]
];

// Contoh pemanggilan output
// echo "Nama Saya Adalah = $mahasiswa[nama]";
// echo "<br>";
// echo $mahasiswa["nama"];

echo $mahasiswa[1]["prodi"]; // pemanggilan output ketika 2 data dalam 1 array
