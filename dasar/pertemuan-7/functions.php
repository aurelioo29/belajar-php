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

function cari($keyword){

  $query = "SELECT * FROM mahasiswa WHERE 
            nim LIKE '%$keyword%' OR 
            nama LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%' OR 
            email LIKE '%$keyword%'
            ";

  return query($query);
}

function register($data){
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek apakah username udah ada atau belum di database
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  
  if(mysqli_fetch_assoc($result)){
    echo
    "<script>
      alert 'Maaf, username yang ingin di daftarkan sudah terdaftar'
    </script>";
    return false;
  }

  // cek password yg di tulisan sama confrim password sama atau gak
  if ($password !== $password2){
    echo
    "<script>
      alert('Maaf password tidak sama');
    </script>";

    return false;
  }
  
  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // menambahkan username ke dalam database
  mysqli_query($conn,"INSERT INTO user VALUES('', '$username', '$password')");

  return mysqli_affected_rows($conn);
}


// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row()     // mengembalikan array numerik
// mysqli_fetch_assoc()   // mengembalikan array associative
// mysqli_fetch_array()   // bisa fleksibel, kekurangan karena data disajikan double numerik & associative
// mysqli_fetch_object()  //