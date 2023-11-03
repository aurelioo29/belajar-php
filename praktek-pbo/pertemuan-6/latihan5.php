<?php

abstract class mobil
{
  abstract public function lihat_spesifikasi($nama_pemilik);

  public static function hidupkan_mobil()
  {
    echo "hidupkan mobil";
  }
}

echo mobil::hidupkan_mobil();
