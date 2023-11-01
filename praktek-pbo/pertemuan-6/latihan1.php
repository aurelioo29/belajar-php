<?php

class mamalia
{
  public function tempat_hidup()
  {
    return "hampir seluruh mamalia hidup di darat";
  }
}

class paus extends mamalia
{
  public function tempat_hidup()
  {
    return "paus hidup di air";
  }
}

$hewan_baru = new paus();
echo $hewan_baru->tempat_hidup();
