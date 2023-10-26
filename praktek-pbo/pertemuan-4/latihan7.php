<?php
class mamalia
{
  public function tempat_hidup()
  {
    return "Hampir seluruh mamalia hidup di darat";
  }
}
class Paus extends mamalia
{
  public function tempat_hidup()
  {
    return "Paus hidup di air";
  }

  public function tempat_hidup_mamalia()
  {
    return parent::tempat_hidup();
  }
}

$hewan_baru = new Paus();
echo $hewan_baru->tempat_hidup_mamalia();
echo "<br>";
echo $hewan_baru->tempat_hidup();
