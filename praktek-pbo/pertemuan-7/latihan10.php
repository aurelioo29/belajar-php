<?php

abstract class komputer
{
  abstract public function booting_os();
}

interface mouse
{
  public function double_klik();
}

class laptop extends komputer implements mouse
{
  public function booting_os()
  {
    return "Proses booting sistem operasi laptop";
  }

  public function double_klik()
  {
    return "Double klik mouse laptop";
  }
}

class pc extends komputer implements mouse
{
  public function booting_os()
  {
    return "Proses booting sistem operasi PC";
  }

  public function double_klik()
  {
    return "Double klik mouse PC";
  }
}

class chromebook extends komputer implements mouse
{
  public function booting_os()
  {
    return "Proses booting sistem operasi Chromebook";
  }

  public function double_klik()
  {
    return "Double klik mouse Chromebook";
  }
}

$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chromebook();

function booting_os_komputer($objek_komputer)
{
  return $objek_komputer->booting_os();
}

function double_klik_komputer($objek_komputer)
{
  return $objek_komputer->booting_os();
}

echo booting_os_komputer($laptop_baru);
echo "<br>";
echo double_klik_komputer($laptop_baru);
echo "<br>";
echo "<br>";
echo booting_os_komputer($pc_baru);
echo "<br>";
echo double_klik_komputer($pc_baru);
echo "<br>";
echo "<br>";
echo booting_os_komputer($chromebook_baru);
echo "<br>";
echo double_klik_komputer($chromebook_baru);
echo "<br>";
echo "<br>";
