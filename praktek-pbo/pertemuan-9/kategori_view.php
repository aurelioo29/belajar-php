<?php

include 'db_koneksi.php';
$db = new Database();
$data = $db->get_kategori();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP & MYSQL</title>
  <style>
    body {
      text-align: center;
      background-color: blanchedalmond;
    }

    .button {
      text-decoration: none;
      border: 1px solid #000000;
      color: black;
      padding: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 1);
      border: 1px solid #000000;
      border-radius: 10px;
      margin-top: 30px;
      color: blue;
    }

    .table {
      width: 30%;
      margin: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 2px solid #000000;
      padding: 8px;
      text-align: left;
      text-align: center;
    }

    th {
      background-color: cornflowerblue;
      text-align: center;
    }

    .action {
      background-color: grey;
      text-align: center;
    }

    .action a {
      text-decoration: none;
      color: white;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      text-decoration: underline;
      transition: color 0.3s;
    }

    .action a:hover {
      color: #007bff;
    }
  </style>
</head>

<body>
  <h1>Belajar CRUD dengan PHP MYSQL</h1>
  <h3>Data Kategori</h3>
  <a href="tambah_kategori.php" class="button">Tambah Data</a>
  <div class="table">
    <table border="1">
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Action</th>
      </tr>

      <?php
      $no = 1;
      foreach ($data as $row) :
      ?>
        <tr>
          <td>
            <?php echo $no++ ?>
          </td>
          <td>
            <?php echo $row['nama_kategori'] ?>
          </td>
          <td class="action">
            <a href="kategori_edit.php?id=<?php echo $row['id_kategori']; ?>">Update</a>
            <a href="proses_kategori.php?action=delete&id=<?php echo $row['id_kategori']; ?>">Delete</a>
          </td>
        </tr>
      <?php
      endforeach
      ?>
    </table>
  </div>
</body>

</html>