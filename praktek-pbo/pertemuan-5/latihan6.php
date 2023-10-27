<?php

include 'latihan5.php';

class mahasiswa extends login
{
  public static $kelas;
  public static $jurusan;
  public static $fakultas;

  public static function data_mahasiswa()
  {
    return "Kelas nya " . self::$kelas;
  }

  public static function tampilkan()
  {
    echo parent::user();
    echo "<br>";
    echo self::data_mahasiswa();
  }
}

mahasiswa::$kelas = "TI 3 MALAM A";

mahasiswa::tampilkan();
