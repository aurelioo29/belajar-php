<?php

class mahasiswa
{
  var $nama_mahasiswa = 'budi';
  var $kelas = "3 pagi A";

  public function __construct()
  {
    echo 'Isi bagian method constructor mahasiswa';
  }

  public function nilai_mahasiswa()
  {
    return "Mahasiswa yang bernama $this->nama_mahasiswa berada di kelas $this->kelas memiliki nilai 85 untuk matkul PBO";
  }

  public function __destruct()
  {
    echo 'Ini berasala dari destructor mahasiswa <br>';
  }
}

$mahasiswa_budi = new mahasiswa();

echo "<br>";
echo $mahasiswa_budi->nilai_mahasiswa();
echo "<br>";
