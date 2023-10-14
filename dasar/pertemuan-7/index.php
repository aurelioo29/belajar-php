<?php
// Connection Database
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <a href="crud/create.php">ADD</a>

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
          <a href="">EDIT</a> |
          <a href="delete.php?id=<?php $row["id"]; ?>">DELETE</a>
        </td>
      </tr>
      <?php $i++ ?>
    <?php endforeach ?>
  </table>
</body>

</html>