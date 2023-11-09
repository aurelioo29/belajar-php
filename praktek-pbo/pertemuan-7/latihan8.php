<?php

interface bangunDatar
{
  public function hitungLuas();
}

class persegi implements bangunDatar
{
  private $sisi = 4;

  public function __construct($sisi)
  {
    $this->sisi = $sisi;
  }

  public function hitungLuas()
  {
    return pow($this->sisi, 2);
  }
}

class segitiga implements bangunDatar
{
  private $alas;
  private $tinggi;

  public function __construct($alas, $tinggi)
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  public function hitungLuas()
  {
    return (0.5 * $this->alas * $this->tinggi);
  }
}

class lingkaran implements bangunDatar
{
  private $jari = 7;

  public function __construct($jari)
  {
    $this->jari = $jari;
  }

  public function hitungLuas()
  {
    return (3.14 * pow($this->jari, 2));
  }
}

$persegi = new persegi(4);
echo 'Luas persegi ' . $persegi->hitungLuas() . "<br>";
$segitiga = new segitiga(4, 5);
echo 'Luas segitiga ' . $segitiga->hitungLuas() . "<br>";
$lingkaran = new lingkaran(4);
echo 'Luas lingkaran ' . $lingkaran->hitungLuas() . "<br>";
