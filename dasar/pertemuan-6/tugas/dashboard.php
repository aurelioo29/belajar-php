<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if (isset($_POST['username'])) : ?>
    <h1>Welcome Back, <?php echo $_POST["username"] ?></h1>
  <?php endif ?>

  <br>
  <button><a href="login-form.php">Logout</a></button>
</body>
</html>