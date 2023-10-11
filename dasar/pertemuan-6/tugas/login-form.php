<?php
  if (isset($_POST["submit"])){
    // ini ngecek password nya, kalo btul ke dashboard
    if ($_POST["username"] == "rel" && $_POST["password"] == "123") {
      header("Location: dashboard.php");
      exit;
    } 
    // ini kalo salah muncul warning
    else {
      $error = true;
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
  <h1>Login Form</h1>

  <?php if (isset($error)) : ?>
    <h1>Maaf username / password mu salah</h1>
  <?php endif ?>


  <ul>
    <form action="dashboard.php" method="post">
      <li>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
      </li>
      <li>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
      </li>
      <li>
        <button type="submit" name="submit">Login</button>
      </li>
      </form>
  </ul>
</body>
</html>