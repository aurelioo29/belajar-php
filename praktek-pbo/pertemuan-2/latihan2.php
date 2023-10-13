<?php

class mobil
{
  public $pemilik;

  public function nyala_mobil()
  {
    return "Mesin mobil menyala";
  }
}

$mobil_budi = new mobil();

$mobil_budi->pemilik = "Budi";

echo $mobil_budi->pemilik;
echo "<br>";
echo $mobil_budi->nyala_mobil();
