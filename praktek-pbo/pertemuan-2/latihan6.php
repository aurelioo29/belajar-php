<?php

class mobil
{
  public $nama_pemilik = "budi";
  public function hidup_mobil()
  {
    return "Hidupkan mobil $this->nama_pemilik";
  }
}

$mobil_baru = new mobil();

echo $mobil_baru->hidup_mobil();
echo "<br>";

$mobil_baru->nama_pemilik = "angga";

echo $mobil_baru->hidup_mobil();
echo "<br>";

$mobil_lama = new mobil();
echo $mobil_lama->hidup_mobil();
