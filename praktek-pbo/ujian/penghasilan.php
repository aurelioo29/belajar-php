<?php

class Penghasilan
{
  private $gaji_pokok;
  private $tunjangan;
  private $pembayaran_lainnya;
  private $beban_tanggungan;

  public function __construct($gaji_pokok, $tunjangan, $pembayaran_lainnya, $beban_tanggungan)
  {
    $this->gaji_pokok = $gaji_pokok;
    $this->tunjangan = $tunjangan;
    $this->pembayaran_lainnya = $pembayaran_lainnya;
    $this->beban_tanggungan = $beban_tanggungan;
  }

  public function hitungPenghasilanBersih()
  {
    return $this->gaji_pokok + $this->tunjangan + $this->pembayaran_lainnya - $this->beban_tanggungan;
  }
}
