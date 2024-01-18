<?php
  include "service/db.php";
  session_start();

  $register_message = "";

  if(isset($_SESSION["isLogin"])){
    header("location: dashboard.php");
  }

  if (isset($_POST["register"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = hash("sha256", $password);

    try {
      $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
  
      if ($db->query($sql)){
        $register_message = "Anda berhasil membuat akun";
      } else {
        $register_message = "Anda gagal membuat akun";
      }
    } catch (mysqli_sql_exception) {
      $register_message = "Username sudah di gunakanan";
    }
    $db->close();
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
  <?php include "layout/header.html" ?>

  <h3>REGISTER</h3>
  <i><?= $register_message; ?></i>
  <form action="register.php" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit" name="register">Daftar</button>
  </form>

  <?php include "layout/footer.html" ?>
</body>
</html>