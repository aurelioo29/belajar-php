<!-- Membuat 5 data dalam array dengn memunculkan output nya -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $toko = [
    [
      "nama" => "pensil",
      "stok" => "100",
      "warna" => "hitam",
      "harga" => '5.000',
      "gambar" => "pensil.jpg"
    ],

    [
      "nama" => "pulpen",
      "stok" => "20",
      "warna" => "hijau",
      'harga' => '6.500',
      "gambar" => "",
    ],

    // [
    //   "nama" => "pensil warna",
    //   "stok" => "40",
    //   "warna" => "banyak",
    //   'harga' => '50.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "kertas binder",
    //   "stok" => "10",
    //   "warna" => "putih",
    //   'harga' => '35.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "buku tulis",
    //   "stok" => "10",
    //   "warna" => "biru",
    //   'harga' => '25.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "hvs",
    //   "stok" => "20",
    //   "warna" => "putih",
    //   'harga' => '30.000',
    //   "gambar" => "",
    // ],
    
    // [
    //   "nama" => "amplop",
    //   "stok" => "15",
    //   "warna" => "putih",
    //   'harga' => '2.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "tinta",
    //   "stok" => "40",
    //   "warna" => "merah",
    //   'harga' => '15.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "penggaris",
    //   "stok" => "15",
    //   "warna" => "bening",
    //   'harga' => '10.000',
    //   "gambar" => "",
    // ],

    // [
    //   "nama" => "stipek",
    //   "stok" => "15",
    //   "warna" => "hitam",
    //   'harga' => '3.000',
    //   "gambar" => "",
    // ],
  ];
  ?>

  <h1>List Peralatan Toko</h1>

  <ul>
    <?php foreach ($toko as $t) : ?>
      <li> <?php echo $t["nama"] ?> </li>
      <li> <?php echo $t["stok"] ?> </li>
      <li> <?php echo $t["warna"] ?> </li>
      <li> <?php echo $t["harga"] ?> </li>
      <li> <img src="img/<?php $t["gambar"] ?>"></li>
      <?php echo "</br>" ?>
    <?php endforeach ?>
  </ul>

</body>
</html>

