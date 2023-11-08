<?php

// NAMA : AURELIO LUCIO LIE
// KELAS : 3 MALAM A
// NIM : 223303030427

class penghasilan
{
  private $pendapatanTahunan;
  private $pendapatanBulanan;

  public function __construct($pendapatanBulanan)
  {
    $this->pendapatanBulanan = $pendapatanBulanan;
    $this->pendapatanTahunan = $this->hitungPendapatanTahunan();
  }

  public function hitungPajak()
  {
    if ($this->pendapatanTahunan < 50000000) {
      return $this->pendapatanTahunan * 0.05;
    } else if ($this->pendapatanTahunan > 150000000) {
      return $this->pendapatanTahunan * 0.15;
    } else {
      return $this->pendapatanTahunan * 0.1;
    }
  }

  private function hitungPendapatanTahunan()
  {
    return $this->pendapatanBulanan * 12;
  }

  public function tampilkanPendapatan()
  {
    echo "Pendapatan Tahunan : RP." . $this->pendapatanTahunan . PHP_EOL;
    echo "<br>";
  }

  public function tampilkanPendapatanBulanan()
  {
    echo "Pendapatan Bulanan : RP." . $this->pendapatanBulanan . PHP_EOL;
  }
}

class pajak
{
  private $penghasilan;

  public function __construct($penghasilan)
  {
    $this->penghasilan = $penghasilan;
  }

  public function tampilkanPajak()
  {
    $pajak = $this->penghasilan->hitungPajak();
    echo "Pajak yang harus dibayarkan RP." . $pajak . PHP_EOL;
  }
}

$pendapatan = new penghasilan(3500000);
$pajak = new pajak($pendapatan);
$pendapatan->tampilkanPendapatan();
$pendapatan->tampilkanPendapatanBulanan();
echo "<br>";
$pajak->tampilkanPajak();

echo "<br><br>";

$pendapatan = new penghasilan(10500000);
$pajak = new pajak($pendapatan);
$pendapatan->tampilkanPendapatan();
$pendapatan->tampilkanPendapatanBulanan();
echo "<br>";
$pajak->tampilkanPajak();

echo "<br><br>";

$pendapatan = new penghasilan(30500000);
$pajak = new pajak($pendapatan);
$pendapatan->tampilkanPendapatan();
$pendapatan->tampilkanPendapatanBulanan();
echo "<br>";
$pajak->tampilkanPajak();
