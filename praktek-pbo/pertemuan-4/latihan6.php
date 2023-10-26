<?php

require "latihan5.php";

class dosen extends login
{
  public $nidn;

  public function __construct($username, $password, $nidn)
  {
    $this->username = $username;
    $this->password = $password;
    $this->nidn = $nidn;
  }

  public function keterangan()
  {
    echo "Anda login atas 
          nama {$this->username} 
          pass {$this->password}
          nidn {$this->nidn}";
  }
}

$budi = new dosen("Budi", "budi123", "1234566789");
$tono = new dosen("Tono", "tono23", "987654321");

$budi->keterangan();
echo "<br>";
$tono->keterangan();
