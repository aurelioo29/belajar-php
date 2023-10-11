<?php
/*
Variabel yang sudah ada / tersedia pada PHP nya, bisa di pakai di semua file dengan .php

Variabel SuperGlobal ini merupakan Array Associative;
- $_GET         dikirim melalui LINK > lalu di tangkap oleh variable superglobal 
- $_POST
- $_REQUEST
- $_SESSION
- $_COOKIE
- $_SERVER
- $_ENV
*/

$mahasiswa = [
  [
    "nama" => "rel",
    "nim" => "230495786",
    "prodi" => "informatika"
  ],

  [
    "nama" => "dendy",
    "nim" => "23049238929",
    "prodi" => "hukum"
  ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layar Depan</title>
</head>
<body>
  <ul>
    <?php foreach($mahasiswa as $m) : ?>
      <li>
        <!-- Ini bagian eksekusi dengan Method $_GET -->
        <a href="latihan.php?nama=<?php echo $m["nama"] ?>&nim=<?php echo $m["nim"] ?>&prodi=<?php echo $m["prodi"] ?>">
          <!-- Ini merupakan bagian untuk mencetak ke output nya-->
          <?php echo $m["nama"] ?>
        </a>
      </li>
      <?php endforeach; ?>
  </ul>
</body>
</html>