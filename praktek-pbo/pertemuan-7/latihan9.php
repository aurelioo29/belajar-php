<?php

interface tanah
{
  public function hitungLuas();
}

abstract class bibit
{
  abstract public function ditanami();
}

class lingkaran extends bibit implements tanah
{
  private $jari;
  private $phi = 3.14;

  public function __construct($jari)
  {
    $this->jari = $jari;
  }

  public function hitungLuas()
  {
    return $this->jari * $this->jari * $this->phi;
  }

  public function ditanami()
  {
    return "Ditanami kopi";
  }
}

class persegiPanjang extends bibit implements tanah
{
  private $panjang;
  private $lebar;

  public function __construct($panjang, $lebar)
  {
    return $this->panjang * $this->lebar;
  }

  public function hitungLuas()
  {
    return $this->panjang * $this->lebar;
  }

  public function ditanami()
  {
    return "Ditanami padi";
  }
}

$tanahAgus = new lingkaran(3);
$tanahChandra = new persegiPanjang(3, 5);

echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 \n";
echo $tanahAgus->ditanami();
echo "<br>";
echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " m2 \n";
echo $tanahChandra->ditanami();
