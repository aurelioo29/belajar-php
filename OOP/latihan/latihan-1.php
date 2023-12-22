<!-- 
Latihan tentang ;
class & object
constructor
property & method
object type
-->
<?php

class kendaraan
{
  public $nama, $jenis, $brand, $warna;

  public function __construct($nama = "None", $jenis = "None", $brand = "None", $warna = "None")
  {
    $this->nama = $nama;
    $this->jenis = $jenis;
    $this->brand = $brand;
    $this->warna = $warna;
  }
}

$mobil = new kendaraan("Bugatti", "Sport", "", "Merah");
echo "Nama: {$mobil->nama}, Jenis: {$mobil->jenis}, Brand: {$mobil->brand}, Warna: {$mobil->warna}";
