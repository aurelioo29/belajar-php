<?php
class mahasiswa
{
  public static $nama;
  public static $nim;
  public static $jurusan;

  public static function mahasiswa_baru()
  {
    return "merupakan mahasiswa baru dengan nama Budi";
  }
}

mahasiswa::$nim = 201039839;

echo mahasiswa::$nim;
echo "<br>";
echo mahasiswa::mahasiswa_baru();
