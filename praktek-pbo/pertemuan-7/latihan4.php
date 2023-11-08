<?php

interface kendaraan
{
  public function __construct();
  public function getWarna();
}

class motor implements kendaraan
{
  public function __construct()
  {
    echo "Halo ini dari Constructor motor <br>";
  }
  public function getWarna()
  {
    return "Hijau";
  }
}

class mobil implements kendaraan
{
  public function __construct()
  {
    echo "Halo ini dari Constructor mobil <br>";
  }
  public function getWarna()
  {
    return "Biru";
  }
}

$motor = new motor();
echo $motor->getWarna();
echo "<br>";
$mobil = new mobil();
echo $mobil->getWarna();
