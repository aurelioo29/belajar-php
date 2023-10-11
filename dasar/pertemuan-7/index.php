<?php
// Connection Database
$conn = mysqli_connect(
  "localhost",    // hostname
  "root",         // username
  "",             // password
  "belajar_php"  // nama database
);

// query for select mahasiswa databases
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// untuk cek apakah database udh kesambung ama PHP 
// while ($data = mysqli_fetch_assoc($result)){
//   var_dump($data);
// }

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()     // mengembalikan array numerik
// mysqli_fetch_assoc()   // mengembalikan array associative
// mysqli_fetch_array()   // bisa fleksibel, kekurangan karena data disajikan double numerik & associative
// mysqli_fetch_object()  //

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
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Email</th>
      <th>Action</th>
    </tr>
    
    <?php $i=1 ?>
    <?php while ($row=mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["nim"] ?></td>
      <td><?php echo $row["nama"] ?></td>
      <td><?php echo $row["jurusan"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td>
        <a href="">EDIT</a> |
        <a href="">DELETE</a>
      </td>
    </tr>
    <?php $i++ ?>
    <?php endwhile ?>
  </table>
</body>
</html>