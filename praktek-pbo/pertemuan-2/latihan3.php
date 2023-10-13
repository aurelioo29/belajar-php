<?php

class mobil
{
  protected $pemilik = "budi";

  public function akses_pemilik()
  {
    return $this->pemilik;
  }
  protected function nyala_mobil()
  {
    return "hidupkan mesin mobil";
  }
  public function paksa_hidup()
  {
    return $this->nyala_mobil();
  }
}

$mobil_budi = new mobil();

echo $mobil_budi->akses_pemilik();
echo "<br>";
echo $mobil_budi->paksa_hidup();
