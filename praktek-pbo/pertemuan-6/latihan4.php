<?php

abstract class mobil
{
  abstract public function lihat_spesifikasi();
}

class bus extends mobil
{
  public function lihat_spesifikasi()
  {
    return "lihat spesifikasi mobil";
  }

  public function beli_bus()
  {
    return "beli bus";
  }
}

$bus_baru = new bus();
echo $bus_baru->lihat_spesifikasi();
echo "<br>";
echo $bus_baru->beli_bus();
