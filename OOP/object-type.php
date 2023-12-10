<?php

class produk
{
  public $judul, $penulis, $penerbit, $harga;

  public function __construct($judul, $penulis, $penerbit, $harga)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function label()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function sayHelo()
  {
    return "Hellow World !!!";
  }
}

class CetakInfo
{
  public function cetak(produk $produk)
  {
    $str = "{$produk->judul} | {$produk->label()}";
    return $str;
  }
}

$produk1 = new produk("Raih Mimpi", "Rahman Darsindo", "Weikom", 50000);

echo $produk1->label();
echo "<hr>";
$infoProduk = new CetakInfo();
echo $infoProduk->cetak($produk1);
