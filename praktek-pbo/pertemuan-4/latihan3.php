<?php
class buah
{
  public $nama;
  public $warna;

  public function __construct($nama, $warna)
  {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  public function keterangan()
  {
    echo "Nama buah tersebut adalah {$this->nama} & warna {$this->warna}";
  }
}

class strawberry extends buah
{
  public $berat;

  public function __construct($nama, $warna, $berat)
  {
    $this->nama = $nama;
    $this->warna = $warna;
    $this->berat = $berat;
  }

  public function keterangan()
  {
    echo "Nama buah nya ialah {$this->nama} & warna {$this->warna} serta beranya ialah {$this->berat} gram";
  }
}

$strawberry = new strawberry("stawberrry", "merah", "50");
$strawberry->keterangan();
