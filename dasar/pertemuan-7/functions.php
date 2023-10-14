<?php

//Database
$conn = mysqli_connect(
  "localhost",    // hostname
  "root",         // username
  "",             // password
  "belajar_php"  // nama database
);

//Query
function query($query)
{
  global $conn;
  // query for select mahasiswa databases
  $result = mysqli_query($conn, $query);

  // untuk cek apakah database udh kesambung ama PHP 
  // while ($data = mysqli_fetch_assoc($result)){
  //   var_dump($data);
  // }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function create($data)
{
  global $conn;

  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);

  $query = "INSERT INTO mahasiswa VALUES ('','$nim','$nama','$jurusan','$email')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function update($data)
{
  global $conn;

  $id = $data["id"];
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);

  $query = "UPDATE mahasiswa SET 
          nim = '$nim',
          nama = '$nama',
          jurusan = '$jurusan',
          email = '$email' 
            WHERE id = $id";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()     // mengembalikan array numerik
// mysqli_fetch_assoc()   // mengembalikan array associative
// mysqli_fetch_array()   // bisa fleksibel, kekurangan karena data disajikan double numerik & associative
// mysqli_fetch_object()  //