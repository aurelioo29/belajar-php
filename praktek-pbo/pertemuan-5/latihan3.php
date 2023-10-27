<?php

class barang
{
  public $nama;
  public $brand;
  public static $harga;

  public static function barang_baru()
  {
    return "sound card v8 merupakan barang kode 101 & harga barang ialah RP" . self::$harga;
  }
}

barang::$harga = 500000;

echo "<br>";
echo barang::barang_baru();
