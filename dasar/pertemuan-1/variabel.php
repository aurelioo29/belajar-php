<?php

/*
📍 Variabel & Tipe Data ;
Tidak perlu mendefinisikan tipe data ke dalam Variabel, sama seperti JS

📍 Penggunaan Petik " & '
- Ketika menggunakan " dalam pemanggilan variabel, maka dapat di baca 
- Sedangakan menggunakan ' tidak dapat mengeluarkan output variabel yang sudah di definisikan

📍 Operator
-> arimatika = + - / * %
-> penggabung string = .
-> assigment = += -= /= *= %= .=
-> perbandingan = < > <= >= == !=
-> identitas = === !==
-> Logika = && || !
*/

$txt = "PHP";
$angka = 100;
echo "I love " . $txt . " and the number " . $angka;
// 
echo "<br>"; // Sintak unntuk membuat enter
// 
echo "Berikut contoh penggunaan Petik (Dua)";
echo "<br>";
echo "Halo $txt";
echo "<br>";
// 
echo "Berikut contoh penggunaan Petik (Satu)";
echo "<br>";
echo 'Halo $txt';
echo "<br>";
// 
echo "Berikut contoh penggunaan penggabung string";
$depan = "Aurel";
$belakang = "io";
echo "<br>";
echo $depan . " " . $belakang;
echo "<br>";
// 