<?php
class persegi
{
  const sisi = 4;
}

class kubus extends persegi
{
  const sisi = 12;

  public function hitung_persegi($panjang)
  {
    return "Keliling persegi ialah " . $panjang * parent::sisi;
  }

  public function hitung_kubus($panjang)
  {
    return "Keliling kubus ialah " . $panjang * parent::sisi;
  }
}

$keliling = new kubus();

echo $keliling->hitung_persegi(4);
echo "<br>";
echo $keliling->hitung_kubus(4);
