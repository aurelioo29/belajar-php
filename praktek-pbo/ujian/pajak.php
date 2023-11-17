<?php

class Pajak
{
  private $pkp;
  private $tarif_pajak;
  private $besaran_pajak;

  public function __construct($pkp, $tarif_pajak)
  {
    $this->pkp = $pkp;
    $this->tarif_pajak = $tarif_pajak;
  }

  public function hitungBesaranPajak()
  {
    if ($this->pkp < 50000000) {
      $this->besaran_pajak = $this->pkp * 0.05;
    } elseif ($this->pkp >= 50000000 && $this->pkp < 250000000) {
      $this->besaran_pajak = $this->pkp * 0.15;
    } elseif ($this->pkp >= 250000000 && $this->pkp < 500000000) {
      $this->besaran_pajak = $this->pkp * 0.25;
    } else {
      $this->besaran_pajak = $this->pkp * 0.30;
    }

    return $this->besaran_pajak;
  }
}
