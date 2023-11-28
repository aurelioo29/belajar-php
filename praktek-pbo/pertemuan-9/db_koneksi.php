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
}
