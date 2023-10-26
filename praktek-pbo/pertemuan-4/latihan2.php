<?php
class mamalia
{
  public function tempat_hidup()
  {
    return "Sebagian besar mamalia hidup di darat";
  }
}
class Paus extends mamalia
{
  public function hidup_paus()
  {
    return "Paus hidup di air";
  }
}

$ikan = new Paus();

echo $ikan->tempat_hidup();
