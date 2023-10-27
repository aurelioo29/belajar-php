<?php

class lingkaran
{
  const phi = 3.14;

  public function hitung($jari)
  {
    return "Luas nya ialah " . $jari * $jari * self::phi;
  }
}

$luas_lingkaran = new lingkaran();

echo $luas_lingkaran->hitung(10);
