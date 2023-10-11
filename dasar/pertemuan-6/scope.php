<?php
/*
Variabel lokal & Global

*/
$x = 10;

// contoh function ini variabel nya menggunakan dari global karena telah di panggil dengan syntax [ global ].
function angka(){
  global $x;
  echo $x;
}

angka();