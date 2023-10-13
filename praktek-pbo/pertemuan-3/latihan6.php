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
  public $type_kendaraan;
  public $jumlah_ban;

  public function lihat_data()
  {
    return "Nama pemilik:$this->nama_pemilik,Merek kendaraan:$this->merek_kendaraan,No kendaraan:$this->no_kendaraan";
  }
}

class mitsubhisi extends mobil
{
  public function type_mobil()
  {
    return "Type kendaraan:$this->type_kendaraan, Jumlah ban:$this->jumlah_ban";
  }
}

$mobil_baru = new mobil();
$mobil_baru = new mitsubhisi();

$mobil_baru->nama_pemilik = "budi";
$mobil_baru->merek_kendaraan = "mitsubhisi";
$mobil_baru->no_kendaraan = "no 123 medan";
$mobil_baru->type_kendaraan = "mobil pribadi";
$mobil_baru->jumlah_ban = "4";

echo $mobil_baru->beli_mobil();
echo "<br>";
echo $mobil_baru->lihat_data();
echo "<br>";
echo $mobil_baru->type_mobil();
