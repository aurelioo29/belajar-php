<?php
// phpinfo();
class Database
{
  var $host     = 'localhost';
  var $username = 'root';
  var $password = '';
  var $database = 'db_php_mysql';
  var $koneksi  = '';

  function __construct()
  {
    $this->koneksi = mysqli_connect(
      $this->host,
      $this->username,
      $this->password,
      $this->database
    );
    if (mysqli_connect_errno()) {
      echo 'Koneksi gagal : ' . mysqli_connect_errno();
    }
  }

  function get_kategori()
  {
    $data = mysqli_query($this->koneksi, 'SELECT * FROM tbl_m_kategori');
    while ($row = mysqli_fetch_array($data)) {
      $hasil[] = $row;
    }
    return $hasil;
  }

  function tambah_data($nama_kategori)
  {
    mysqli_query(
      $this->koneksi,
      "INSERT INTO tbl_m_kategori (nama_kategori) VALUES ('$nama_kategori')"
    );
  }

  function get_by_id($id_kategori)
  {
    $query = mysqli_query(
      $this->koneksi,
      "SELECT * FROM tbl_m_kategori WHERE id_kategori = '$id_kategori'"
    );
    return $query->fetch_array();
  }

  function update_data($nama_kategori, $id_kategori)
  {
    $query = mysqli_query(
      $this->koneksi,
      "UPDATE tbl_m_kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'"
    );
  }

  function delete_data($id_kategori)
  {
    $query = mysqli_query(
      $this->koneksi,
      "DELETE FROM tbl_m_kategori WHERE id_kategori = '$id_kategori'"
    );
  }
}
