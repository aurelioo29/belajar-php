<?php

require 'penghasilan.php';
require 'pajak.php';
require 'ptkp.php';

// Contoh penggunaan
$gaji_pokok = 100000000;
$tunjangan = 0;
$pembayaran_lainnya = 0;
$beban_tanggungan = 2000000;

$penghasilan = new Penghasilan($gaji_pokok, $tunjangan, $pembayaran_lainnya, $beban_tanggungan);
$penghasilan_bersih = $penghasilan->hitungPenghasilanBersih();

$pribadi = 54000000;
$istri = 4500000;
$anak = 4500000;

$ptkp = new PTKP($pribadi, $istri, $anak);
$ptkp_value = $ptkp->hitungPTKP();

$pkp = $penghasilan_bersih - $ptkp_value;
$tarif_pajak = 0; // Set tarif pajak sesuai kebutuhan

$pajak = new Pajak($pkp, $tarif_pajak);
$besaran_pajak = $pajak->hitungBesaranPajak();

// Menampilkan hasil
echo "<h2>Perhitungan Pajak Penghasilan</h2>";
echo '<table border="2">';
echo '<tr><th>Kategori</th><th>Nilai</th></tr>';
echo '<tr><td>Penghasilan Bersih</td><td>Rp ' . number_format($penghasilan_bersih, 2) . '</td></tr>';
echo '<tr><td>PTKP</td><td>Rp ' . number_format($ptkp_value, 2) . '</td></tr>';
echo '<tr><td>PKP</td><td>Rp ' . number_format($pkp, 2) . '</td></tr>';
echo '<tr><td>Besaran Pajak</td><td>Rp ' . number_format($besaran_pajak, 2) . '</td></tr>';
echo '</table>';
