<?php

interface administrasi
{
  public function nomorInduk();
}

class mahasiswa implements administrasi
{
  protected $prefix = 'MHS';
  public function nomorInduk()
  {
    return $this->prefix . mt_rand(100, 1000);
  }
}

class dosen implements administrasi
{
  protected $prefix = 'DSN';
  public function nomorInduk()
  {
    return $this->prefix . mt_rand(100, 1000);
  }
}

class karyawan implements administrasi
{
  protected $prefix = 'KRY';
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
echo "<br>";
echo generateNomorInduk(new karyawan());
