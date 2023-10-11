<?php
// ini script untuk mengecek jika data tidak ada di $_GET
// maka dia akan di tendang / redirect ke superglobal.php
if( !isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["nim"])){
  header("Location:GET.php"); // ini syntax utk redirect nya
  exit;
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
  <ul>
    <li><?php echo $_GET["nama"] ?></li>
    <li><?php echo $_GET["nim"] ?></li>
    <li><?php echo $_GET["prodi"] ?></li>

  </ul>
  <Button><a href="GET.php">Kembali ke SuperGlobal</a></Button>
</body>
</html>   