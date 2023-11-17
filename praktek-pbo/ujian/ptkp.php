<?php

class PTKP
{
  private $pribadi;
  private $istri;
  private $anak;

  public function __construct($pribadi, $istri, $anak)
  {
    $this->pribadi = $pribadi;
    $this->istri = $istri;
    $this->anak = $anak;
  }

  public function hitungPTKP()
  {
    return $this->pribadi + $this->istri + $this->anak;
  }
}
