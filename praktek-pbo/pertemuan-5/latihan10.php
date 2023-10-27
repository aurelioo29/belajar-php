<?php

class lingkaran
{
  const phi = 3.14;
}

class tabung extends lingkaran
{
  public function volume_tabung($jari, $tinggi)
  {
    return "Luas tabung ialah " . $jari * $jari * $tinggi * self::phi;
  }
}

class kerucut extends lingkaran
{
  public function volume_kerucut($jari, $tinggi)
  {
    return "Luas kerucut ialah " . $jari * $jari * 0.33 * $tinggi * self::phi;
  }
}

class bola extends lingkaran
{
  public function volume_bola($jari)
  {
    return "Luas bola ialah " . $jari * $jari * $jari * 1.33 * self::phi;
  }
}

$tabung = new tabung();
$kerucut = new kerucut();
$bola = new bola();

echo $tabung->volume_tabung(14, 10);
echo "<br>";
echo $kerucut->volume_kerucut(14, 10);
echo "<br>";
echo $bola->volume_bola(14);
