<?php

class login
{
  public $username;
  public $password;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
  }

  public function keterangan()
  {
    echo "Anda login atas nama {$this->username} serta pass {$this->password}";
  }
}

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

class mahasiswa extends login
{
  public $nim;

  public function __construct($username, $password, $nim)
  {
    $this->username = $username;
    $this->password = $password;
    $this->nim = $nim;
  }

  public function keterangan()
  {
    echo "Anda login atas 
          nama {$this->username} 
          pass {$this->password}
          nim {$this->nim}";
  }
}

$budi = new dosen("Budi", "budi123", "1234566789");
$tono = new dosen("Tono", "tono23", "987654321");
$ira = new mahasiswa("Ira", "iraira", "2425256789");

$budi->keterangan();
echo "<br>";
$tono->keterangan();
echo "<br>";
$ira->keterangan();
