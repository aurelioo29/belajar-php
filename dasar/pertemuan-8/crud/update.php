<?php
require '../functions.php';

// ambil data id dari url
$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
  // cek apakah data berhasil di ubah atau gagal
  if (update($_POST) > 0) {
    echo "
      <script>
        alert('Data telah berhasil di ubah ke dalam database');
        document.location.href = '../index.php'; 
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal di ubah ke dalam database');
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
  <h1>Update data</h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $mhs["id"]?>">
    <ul>
      <li>
        <label for="nim">Input NIM = </label>
        <input type="number" name="nim" id="" value="<?php echo $mhs["nim"] ?>">
      </li>
      <li>
        <label for="nama">Input Nama = </label>
        <input type="text" name="nama" id="" value="<?php echo $mhs["nama"] ?>">
      </li>
      <li>
        <label for="jurusan">Input Jurusan = </label>
        <input type="text" name="jurusan" id="" value="<?php echo $mhs["jurusan"] ?>">
      </li>
      <li>
        <label for="email">Input Email = </label>
        <input type="email" name="email" id="" value="<?php echo $mhs["email"] ?>">
      </li>
      <li>
        <button type="submit" name="submit">Update</button>
      </li>
    </ul>
  </form>

  <button><a href="../index.php">Home</a></button>
</body>

</html>