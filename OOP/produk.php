<?php

class produk
{
  public $judul, $penulis, $penerbit, $harga;


  public function label()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function sayHelo()
  {
    return "Hellow World !!!";
  }
}

$produk = new produk();

echo $produk->sayHelo();
echo "<hr>";
$produk->penulis = "Rel";
$produk->penerbit = "Welmart";
echo $produk->label();
