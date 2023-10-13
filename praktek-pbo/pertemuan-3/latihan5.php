<?php

class kendaraan
{
  public $nama_pemilik;
  public $merek_kendaraan;
  public $no_kendaraan;

  public function beli_mobil()
  {
    return "Beli kendaraan baru";
  }
}

class mobil extends kendaraan
{
  public function lihat_data()
  {
    return "Nama pemilik:$this->nama_pemilik,Merek kendaraan:$this->merek_kendaraan,No kendaraan:$this->no_kendaraan";
  }
}

$mobil_baru = new mobil();

$mobil_baru->nama_pemilik = "budi";
$mobil_baru->merek_kendaraan = "toyota";
$mobil_baru->no_kendaraan = "no 123 medan";

echo $mobil_baru->beli_mobil();
echo "<br>";
echo $mobil_baru->lihat_data();
