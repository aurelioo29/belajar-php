<?php
class barang
{
  protected static function beli_barang()
  {
    return "beli barang baru";
  }
}

class record extends barang
{
  private static function beli_soundcard()
  {
    return "beli soundcard baru";
  }

  public static function beli_semua()
  {
    echo parent::beli_barang();
    echo "<br>";
    echo self::beli_soundcard();
  }
}

record::beli_semua();
