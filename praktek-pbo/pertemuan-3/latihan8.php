<?php

require 'latihan7.php';

class regular extends mahasiswa
{
  public function data_mahasiswa()
  {
    return "Nama:$this->nama,NIM:$this->nim,Jurusan:$this->jurusan";
  }
}

$mahasiswa_baru = new regular();

$mahasiswa_baru->nama = "Budi";
$mahasiswa_baru->nim = "1234950";
$mahasiswa_baru->jurusan = "Informatika";

echo $mahasiswa_baru->mahasiswa_baru();
echo "<br>";
echo $mahasiswa_baru->data_mahasiswa();
