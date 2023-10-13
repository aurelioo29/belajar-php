<?php

class kendaraan
{
  private $tipe_mobil = "sedan";

  public function tampil_tipe()
  {
    return $this->tipe_mobil;
  }
}

class mobil extends kendaraan
{
  public function tampil_tipe()
  {
    return $this->tipe_mobil;
  }
}

$kendaraan_baru = new kendaraan();
$mobil_baru = new mobil();

echo $kendaraan_baru->tampil_tipe();
echo "<br>";
echo $mobil_baru->tampil_tipe();
