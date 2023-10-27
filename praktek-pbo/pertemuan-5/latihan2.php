<?php

class barang
{
  public $nama;
  public $brand;
  public static $harga;

  public static function barang_baru()
  {
    return "merupakan barang baru dengan kode 101";
  }
}

barang::$harga = 500000;

echo "harga barang ialah : RP" . barang::$harga;
echo "<br>";
echo barang::barang_baru();
