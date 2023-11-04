<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

// Connection Database
require 'functions.php';

// pagination configurate
// jumlah halaman = total data / data per halaman
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// ini codingan tombol search
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <button>
    <a href="logout.php">Logout</a>
  </button>

  <h1>Daftar Mahasiswa</h1>

  <a href="crud/create.php">ADD</a>

  <br><br>

  <form action="" method="post">
    <input type="text" name="keyword" placeholder="masukan pencarian" autocomplete="off" autofocus>
    <button type="submit" name="cari">Search</button>
  </form>

  <br><br>

  <!-- Button for back -->
  <?php if ($halamanAktif > 1) : ?>
    <a href="?halaman=<?php $halamanAktif - 1; ?>">&lt;</a>
  <?php endif; ?>

  <!-- Button for Pagination -->
  <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if ($i == $halamanAktif) : ?>
      <a href="?halaman=<?php $i; ?>" style="font-weight: bold; color:aqua;">
        <?php $i; ?>
      </a>
    <?php else : ?>
      <a href="?halaman=<?php $i; ?>">
        <?php $i; ?>
      </a>
    <?php endif; ?>
  <?php endfor ?>

  <!-- Button for next -->
  <?php if ($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?php $halamanAktif + 1; ?>">&gt;</a>
  <?php endif; ?>

  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Action</th>
    </tr>

    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $row) : ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row["nim"] ?></td>
        <td><?php echo $row["nama"] ?></td>
        <td><?php echo $row["jurusan"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td>
          <a href="crud/update.php?id=<?php echo $row["id"]; ?>">EDIT</a> |
          <a href="crud/delete.php?id=<?php echo $row["id"]; ?>">DELETE</a>
        </td>
      </tr>
      <?php $i++ ?>
    <?php endforeach ?>
  </table>
</body>

</html>