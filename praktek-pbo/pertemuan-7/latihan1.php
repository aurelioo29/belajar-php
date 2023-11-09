<?php

interface mobil
{
  public function nama_pemilik();
  public function no_kendaraan();
}

class bus implements mobil
{
  public function nama_pemilik()
  {
    return "Nama pemilik adalah master Agus";
  }
  public function no_kendaraan()
  {
    return "Nomor kendaraan adalah BK 0010 XX";
  }
}

$bus_data = new bus();
echo $bus_data->nama_pemilik();
echo "<br>";
echo $bus_data->no_kendaraan();