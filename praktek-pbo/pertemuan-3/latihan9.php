<?php

class buah
{
  public $nama;
  public $warna;
  public function __construct($nama, $warna)
  {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  public function awal()
  {
    echo "Nama buah adalah {$this->nama} & warna adalah {$this->warna}";
  }
}

class jeruk extends buah
{
  public function pesan()
  {
    echo "Buah tersebut memiliki rasa sedikit asam";
  }
}

$jeruk = new jeruk("Jeruk", "orange");
$jeruk->pesan();
echo "<br>";
$jeruk->awal();
