<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

// Connection Database
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

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

  <br>

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