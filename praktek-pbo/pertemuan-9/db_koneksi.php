<?php
// phpinfo();
class Database
{
  var $host     = 'localhost'; // Perbaiki kesalahan penulisan 'locahost'
  var $username = 'root';
  var $password = '';
  var $database = 'db_php_mysql';

  function __construct()
  {
    $koneksi = mysqli_connect(
      $this->host,
      $this->username,
      $this->password,
      $this->database
    );
    if ($koneksi) {
      echo 'Database has successfully connected';
    } else {
      echo "Database doesn't have a successful connection";
    }
  }
}

$koneksi = new Database();
