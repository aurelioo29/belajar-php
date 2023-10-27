<?php

class mobil
{
  const type = 'sedan';
}
echo "<b>penggunaan konstanta class dengan langsung</b><br>";
echo "kebanyakan taxi menggunakan mobil " . mobil::type;
echo "<br> <br>";

class mobil2
{
  const type = "sedan";
}
$mobil_taxi = new mobil2;
echo "<b>penggunaan konstanta class mengaksesnya dari objek</b><br>";
echo "kebanyakan taxi gunakan mobil " . $mobil_taxi::type;
echo "<br> <br>";

class mobil3
{
  const type = "sedan";
}
$nama = "mobil";
echo "<b>penggunaan konstanta class mengakses nilai kontanta class dari property dengan nama class yang berada di dalam variabel</b><br>";
echo "kebanyakan taxi menggunakan mobil " . $nama::type;
echo "<br> <br>";
