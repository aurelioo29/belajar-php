<?php

class mobil
{
  var $nama_pemilik;
  var $warna_mobil;

  function __construct()
  {
    echo 'Isi bagian method constructor <br>';
  }

  function __destruct()
  {
    echo 'Isi bagian method destructor <br>';
  }

  function tampil_pemilik()
  {
    return 'Nama pemilik mobil ialah budi <br>';
  }
}

$mobil = new mobil();

echo $mobil->tampil_pemilik();
