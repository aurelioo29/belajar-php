<?php

include 'db_koneksi.php';

$db = new Database();
$id_kategori = $_GET['id_kategori'];

if (!is_null($id_barang)) {
  $data_kategori = $db->get_by_id($id_kategori);
} else {
  header('location:kategori_view.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Kategori Edit</title>
</head>

<body>
  <h3>Update Data</h3>
  <hr>
  <form action="proses_kategori.php?action=update" method="post">
    <input type="hidden" name="id_kategori" value="<?php echo $data_kategori['id_kategori']; ?>">
    <table>
      <tr>
        <td>Nama Kategori</td>
        <td>:</td>
        <td><input type="text" name="nama_kategori" value="<?php echo $data_kategori['nama_kategori']; ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="update" name="tombol"></td>
      </tr>
    </table>
  </form>
</body>

</html>