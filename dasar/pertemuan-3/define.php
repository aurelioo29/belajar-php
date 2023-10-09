<?php
// function date => menampilkan tgl tertentu
echo date("l "); // untuk tampilkan hari
echo date("d "); // untuk tampilkan tanggal
echo date("M "); // untuk tampilkan bulan
echo date("Y "); // untuk tampilkan tahun

// function time => menampilkan time
echo "<br>";
echo time(); // UNIX timestamp detik yg sudah belalu dari 1 januari 1970 - skrng

echo "<br>";
// cek tgl/bln/thn 100 hari kebelakang
// rumus 1 jam diubah 60 menit x 1 menit diubah 60 detik x 1 hari 24 jam x brapa hari yang mau di cari
echo date("d M Y", time() - 60 * 60 * 24 * 100);

// function mktime => membuat detik sendiri
// mktime(jam,menit,detik,bulan,tanggal,tahun)

// strtotime => masukan format tgl keluar detik
echo "<br>";
echo strtotime("25 august 2020");

// String
// -> strlen
// -> strcmp
// -> explode
// -> htmlspecialchars

// Utility
// -> var_dump
// -> isset
// -> empty
// -> die
// -> sleep
