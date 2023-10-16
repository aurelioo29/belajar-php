<?php
require '../functions.php';

if (isset($_POST["submit"])) {
  // cek apakah data berhasil di add atau gagal
  if (create($_POST) > 0) {
    echo "
      <script>
        alert('Data telah berhasil di simpan ke dalam database');
        document.location.href = '../index.php'; 
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal di simpan ke dalam database');
        document.location.href = 'index.php'; 
      </script>
    ";
  }
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
  <h1>Menambahkan data</h1>

  <form action="" method="post">
    <ul>
      <li>
        <label for="nim">Input NIM = </label>
        <input type="number" name="nim" id="" required>
      </li>
      <li>
        <label for="nama">Input Nama = </label>
        <input type="text" name="nama" id="" required>
      </li>
      <li>
        <label for="jurusan">Input Jurusan = </label>
        <input type="text" name="jurusan" id="" required>
      </li>
      <li>
        <label for="email">Input Email = </label>
        <input type="email" name="email" id="" required>
      </li>
      <li>
        <button type="submit" name="submit">Send</button>
      </li>
    </ul>
  </form>

  <button><a href="../index.php">Home</a></button>
</body>

</html>