<?php

abstract class administrasi
{
  private $name;
  public function setName($name)
  {
    $this->name = $name;
  }
  abstract public function nomorInduk();
}

class mahasiswa extends administrasi
{
  protected $prefix = 'MHS';
  public function nomorInduk()
  {
    return $this->prefix . mt_rand(100, 1000);
  }
}

class dosen extends administrasi
{
  protected $prefix = 'DSN';
  public function nomorInduk()
  {
    return $this->prefix . mt_rand(100, 1000);
  }
}

function generateNomorInduk(administrasi $adm)
{
  return $adm->nomorInduk();
}

echo generateNomorInduk(new mahasiswa());
echo "<br>";
echo generateNomorInduk(new dosen());
