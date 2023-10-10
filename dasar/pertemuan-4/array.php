<?php
/*
elemen array boleh memiliki tipe data yang berbeda

ada 2 data array numerik & associative
*/

$hari = ['Senin', 'Selasa', 'Rabu'];

// untuk menampilakn array ada 2 cara ;
var_dump($hari); // cara 1 
echo '<br>';
print_r($hari); // cara 2
echo '<br>';

// menampilkan 1 array saja
echo $hari[1];
echo '<br>';

// menambahakan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo '<br>';
var_dump($hari);